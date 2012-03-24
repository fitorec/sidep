#!/usr/bin/php
<?php
#PHP-DUMP (c) fitorec <chanerec@gmail.com>
#probado sobre sistema linux
#
#

#Parametros  de configuracion
$dirs = array_reverse(explode('/','./trunk/app/config'));
$file_config = 'database.php';
$findConfig = false;

#Parametros opcionales 
$notContinue=true;
$db_server   = 'localhost';
$db_name     = '';
$db_username = '';
$db_password = '';
$filename= '';  

foreach($dirs as $d):
	if(file_exists('./'.$file_config)):
		$findConfig = true;
		break;
	endif;	
	$file_config = $d.'/'.$file_config;
endforeach;
#aqui el archivo d configuracion existe entonces lo incluimos para obtener sus elementos en un arregle
#va a cargar la configuracion por defecto (default) e insertara el archivo sql que recibe por parametro
if($findConfig){
	echo "Archivo de configuración a usar:\n\t./".$file_config."\n";
	include('./'.$file_config);
	$configs = (array)(new DATABASE_CONFIG);
	if(isset($configs['default'])){
		echo "configuracion por default:\n";
		foreach($configs['default'] as $k=>$v)
			if(strlen($v)>2)
				echo $k.":".$v."\n";
	if(!isset($argv[1]) || !file_exists($argv[1])){
		echo "Debe de ejecutar el comando con un <fileConfig.sql> valido\n";
	}else{
		#rediraccionando los datos al drivers correspondiente(en caso de ser valido)
		$conf =  $configs['default'];
		$drivers = array('mysql'=>'mysqlMethod','pgsql'=>'pgsqlMethod');
		#revisamos la existencia y hacemos un llamado dinamico al driver
		if(isset( $drivers[$conf['driver'] ] ) ){
			$querys = parse_sql_file($argv[1]);
			$drivers[$conf['driver'] ]($conf,$querys);
		}else
			echo "Lo sentimos el driver ".$configs['default']['driver']." No esta soportado\n"; 
	}
	}else{
		echo "usar el comando con los siguientes parametros\n";
		foreach($configs as $name=>$conf)
		echo "./".$argv[0]." <fileConfig.sql>  -dbConf ".$name."\n";
	}
}else
	print_r($dirs);

function parse_sql_file($file){
	#abrimos el archivo sql y leemos el contenido
	$h = fopen($file,'rb') or die('Error en abrir el archivo');
	$content =  fread($h,filesize($file));
	fclose($h);
	#eliminando comentario multilinea
	$content = explode('$',preg_replace('/\/\*.*\*\//m','',
					implode('$',explode("\n",$content))
					)
			);
	#Vamos a generar un arreglo querys de consultas
	$querys = array();
	$qAux = '';
	#eliminando --comentarios y unimos las lineas de una misma consulta
	foreach($content as $line)
		if(strlen($line)>2 && !preg_match('/\s*--.*/',$line) )
			if( preg_match('/.*;\s*/',$line) ){
				array_push($querys,preg_replace('/\s\s+/',' ',$qAux.' '.$line));
				$qAux='';
			}else
				$qAux .= $line;
	#finalmente regresamos las consultas en un arreglo
	return $querys;
 }
#
function mysqlMethod($conf,$querys){
	#nos conectamos a la base de datos con mysql
	$link = mysql_connect($conf['host'],$conf['login'],$conf['password']) or die('Error en la conexion');
	mysql_select_db($conf['database'],$link);	
	#una vez conectado podemos ejecutar todas las consultas en querys
	foreach($querys as $q){
		echo "\nprocesando:\n".$q;
		$result = mysql_query($q);
		#revisamos si se generan la consulta
		echo "\nResultados de la consulta Generada\n";
		if (!$result || !preg_match('/^\s*SELECT.*/i',$q) )
			continue;
		while ($row = mysql_fetch_assoc($result))
			foreach($row as $k=>$v)
			    echo "->\t".$k.":\t".$v."\n";
		mysql_free_result($result);
	}
	mysql_close($link);
	echo count($querys)." Consultas Procesadas\n";
}
function pgsqlMethod($conf,$querys){
	#nos conectamos a la base de datos con pgsql
	$conn_string = sprintf("host=%s dbname=%d user=%s password=%s",
			$conf['host'],$conf['database'],$conf['login'],$conf['password']);
	$link = pg_connect($conn_string) or die('Error en la conexion');
	
	#una vez conectado podemos ejecutar todas las consultas en querys
	foreach($querys as $q){
		echo "\nprocesando:\n".$q;
		$result = pg_query($link,$q);
		#revisamos si se generan la consulta
		echo "\nResultados de la consulta Generada\n";
		if (!$result || !preg_match('/^\s*SELECT.*/i',$q) )
			continue;
		while ($row = pg_fetch_assoc($result))
			foreach($row as $k=>$v)
			    echo "->\t".$k.":\t".$v."\n";
		pg_free_result($result);
	}
	pg_close($link);	
}
?>
