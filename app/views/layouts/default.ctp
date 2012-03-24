<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--  _   _   _   _   _   _   _   _   _ 
 / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ 
( s | p | o | r | t | s | m | a | l | l )system
 \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ \_/ by -> mundosica.com
-->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="author" content="" />
	<meta name="Copyright" content="Copyright (c) Your copyright here 2005" />
	<title><?php echo $title_for_layout?></title>
	<!-- Implementación multihojas de estilo -->
	<?php
		echo $html->css('/css/green.css')."\n\t";
		$colors = array('yellow','silver','orange');
		foreach($colors as $c)
			echo $html->css('/css/'.$c.'.css',"alternate stylesheet",array('title'=>$c))."\n\t";
		echo $scripts_for_layout."\n";
	?>
</head>
<body>
	<div id='top'>
	<?php echo $html->image('logo.png'); ?>
	</div>
	<div id='menu'>
		<ul id='navi'>
			<li><?php echo $html->link('Usuario','/users'); ?></li>
			<li><?php echo $html->link('Membresias','/memberships'); ?></li>
			<li><?php echo $html->link('Tipos de Membresias','/type_memberships'); ?></li>
			<li><a href="#">Editar Membresía</a></li>
			<li><a href="#">Elimitar Membresía</a></li>
			<li><a href='#'>Revisar  estado de cuenta</a></li>
		</ul>
	</div>
	<div id='content'>
		<div id='main'>
			<!-- content_for_layout -->
			<?php echo $content_for_layout; ?>
			<!-- end content_for_layout -->
		</div>
	</div>
	<div id='footer'>
	</div>
</html>
