<?php
if(!isset($_COOKIE["username"]) || !isset($_COOKIE["color"]))
	header("Location: index.html");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

	Sidep by fitorec design
	http://fitorec.wordpress.com

-->
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>Datos Personales</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" title="Red" href="css/style_<?php echo $_COOKIE["color"]; ?>.css" />

</script>
</head>
<body>

<div id="header">

	<div id="header_inner" class="fixed">

		<div id="logo">
			<h1><span>SIDEP</span></h1>
			<h2>2009</h2>
		</div>
		
		<div id="menu">
			<ul>
				<li><a href="main.php">Principal</a></li>
				<li><a href="califaciones.php">Calificaciones</a></li>
				<li><a href="curriculum.php">Curriculum</a></li>
				<li><a href="publicaciones.php">Publicaciones</a></li>
				<li><a href="adeudos.php" class="active">Adeudos/pagos</a></li>
				<li><a href="mensajes.php">Mensajes</a></li>
				<li><a href="horario.php">Horario Clases</a></li>
			</ul>
		</div>
		
	</div>
</div>

<div id="main">

	<div id="main_inner" class="fluid">

		<div id="primaryContent_2columns">

			<div id="columnA_2columns">
		<!-- inicio -->
				<h3>Adeudos/pagos de <?php echo $_COOKIE["username"] ?></h3>
				<img src="images/user.jpg" class="floatTL" alt="Something scenic" />
				
				<h1>Adeudos</h1>
				<h2>colegiatura</h2>
				</b><table align="center" border="1" cellspacing="0">
<tbody><tr><td><font size="2"><b>MES<b></b></b></font></td><td><font size="2"><b>BECA<b></b></b></font></td><td><font size="2"><b>IMPORTE<b></b></b></font></td></tr>
<tr><td><font color="#990000" size="2">JUNIO          2009  </font></td><td><font color="#990000" size="2">75   </font></td><td><font color="#990000" size="2">316.68</font></td></tr>
<tr><td><font color="#990000" size="2">MARZO          2009  </font></td><td><font color="#990000" size="2">75   </font></td><td><font color="#990000" size="2">337.27</font></td></tr>
<tr><td><font color="#990000" size="2">MAYO           2009  </font></td><td><font color="#990000" size="2">75   </font></td><td><font color="#990000" size="2">324.4</font></td></tr>
<tr><td><font color="#990000" size="2">ABRIL          2009  </font></td><td><font color="#990000" size="2">75   </font></td><td><font color="#990000" size="2">332.12</font></td></tr>
<tr><td><font color="#990000" size="2">JULIO          2009  </font></td><td><font color="#990000" size="2">75   </font></td><td><font color="#990000" size="2">308.96</font></td></tr>
</tbody></table><br>

				<p>
					<strong>Nombre:</strong>  Hernandez Dante <?php echo $_COOKIE["username"] ?>
				</p>
				<h2>Pagos</h2>
<table align="center" border="1" cellspacing="0">
<tbody><tr><td><font size="2"><b>CONCEPTO<b></b></b></font></td><td><font size="2"><b>COSTO<b></b></b></font></td></tr>
<tr><td><font color="#990000" size="2">TEORIA DE ALGORITMOS                                                            EXAMEN EXTRAORDINARIO                   </font></td><td><font color="#990000" size="2">50.04</font></td></tr>
<tr><td><font color="#990000" size="2">BASES DE DATOS I                                                                EXAMEN ESPECIAL                         </font></td><td><font color="#990000" size="2">98.33</font></td></tr>
<tr><td><font color="#990000" size="2">BASES DE DATOS I                                                                EXAMEN EXTRAORDINARIO                   </font></td><td><font color="#990000" size="2">50.04</font></td></tr>
<tr><td><font color="#990000" size="2">PROGRAMACION ORIENTADA A OBJETOS II                                             EXAMEN EXTRAORDINARIO                   </font></td><td><font color="#990000" size="2">50.04</font></td></tr>
</tbody></table>
				<br class="clear" />			
					</p>
		<!-- fin -->
			</div>
	
		</div>
		
		<div id="secondaryContent_2columns">
		
			<div id="columnC_2columns">
	
				<h4><span>Color </span> Plantilla</h4>
				<ul class="links">
					<li class="first"><a href="session.php?color=red">Rojo</a></li>
					<li><a href="session.php?color=green">Verde</a></li>
					<li><a href="session.php?color=blue">blue</a></li>
					<li><a href="session.php?color=magenta">magenta</a></li>
					<li><a href="session.php?color=brown">Cafe</a></li>
				</ul>
				<h4><a href="session.php?session=off"><span>Cerrar </span> sesi&oacute;n</a></h4>
			</div>

		</div>

		<br class="clear" />

	</div>

</div>

<div id="footer" class="fixed">
	Copyright &copy; 2008 Universidad Tecnologica de la Mixteca <a href="http://www.utm.mx/">UTM</a>.
</div>

</body>
</html>
