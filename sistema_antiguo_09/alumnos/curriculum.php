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
				<li><a href="curriculum.php"  class="active">Curriculum</a></li>
				<li><a href="publicaciones.php">Publicaciones</a></li>
				<li><a href="adeudos.php">Adeudos/pagos</a></li>
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
				<h3>Curriculum Vitae de <?php echo $_COOKIE["username"] ?></h3>
<font size="2">Informaci�n General</font></strong></p>
<p><font size="2">Nombre completo:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_COOKIE["username"] ?> P�rez Hernandez</font></p>
<p>
</p><p><font size="2"></font></p><font size="2">Correos electr�nicos:</font> 
<p></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:ricardo.perez.aguila@gmail.com"><font color="#000099">ricardo.perez.aguila@gmail.com</font></a>, </font><a href="mailto:neote@hotmail.com"><font color="#000099" size="2">neote@hotmail.com</font></a></p>

<p><font size="2">Direcci�n Electr�nica:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font><a href="http://ricardo.perez.aguila.googlepages.com/"><font color="#000099" size="2">http://ricardo.perez.aguila.googlepages.com</font></a></p>
<p><font size="2">&nbsp;</font></p>
<p><strong><font size="2">Grados Acad�micos</font></strong></p>
<p><font size="2">Doctorado (2006):</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Doctorado en Ciencias de la Computaci�n</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fundaci�n Universidad de las Am�ricas, Puebla</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Centro de Investigaci�n en Tecnolog�as de Informaci�n y Automatizaci�n (CENTIA)</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tesis: "<em>Orthogonal Polytopes: Study and Application</em>"</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fecha: 13 de noviembre de 2006</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Exhacienda Santa Catarina M�rtir, Cholula, Puebla, M�xico</font></p>
<p><font size="2">Maestr�a (2003):</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ciencias (Especialidad en Sistemas Computacionales)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fundaci�n Universidad de las Am�ricas, Puebla</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Escuela de Ingenier�a</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tesis: "<em>The Extreme Vertices Model in the 4D space and its Applications in the Visualization and </em></font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Analysis of Multidimensional Data Under the&nbsp;Context of a Geographical Information System</em>"</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fecha: 6 de junio de 2006</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Exhacienda Santa Catarina M�rtir, Cholula, Puebla, M�xico</font></p>

<p><font size="2">Licenciatura (2001):</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ingenier�a en Sistemas Computacionales</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fundaci�n Universidad de las Am�ricas, Puebla</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Escuela de Ingenier�a</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tesis: "<em>4D Orthogonal Polytopes</em>"</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fecha: 17 de diciembre de 2006</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Exhacienda Santa Catarina M�rtir, Cholula, Puebla, M�xico</font></p>
<p>
</p><p><font size="2"></font></p><font size="2">&nbsp;</font> 
<p></p>
<p><strong><font size="2">Actividades Actuales</font></strong></p>
<p><font size="2">Septiembre&nbsp;2007 a la fecha:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Profesor Investigador Titular A</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Instituto de Electr�nica y Computaci�n</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad Tecnol�gica de la Mixteca</font></p>
<p><font size="2">&nbsp;</font></p>
<p><strong><font size="2">Areas de Inter�s</font></strong></p>
<p>
</p><p><font size="2"></font></p><font size="2">Computaci�n y sistemas:</font> 
<p></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Graficaci�n por computadora</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Modelado geom�trico y topol�gico</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Realidad virtual</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Matem�ticas para la computaci�n</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Visualizaci�n y representaci�n de objetos n-Dimensionales</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Reconocimiento de patrones</font></p>
<p><font size="2">&nbsp;</font></p>
<p><strong><font size="2">Proyectos en Proceso</font></strong></p>
<p><font size="2">Libro de Texto</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "Introducci�n a las Matem�ticas para el An�lisis y Dise�o de Algoritmos"</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Avance: 70%</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fecha tentativa de terminaci�n: Diciembre 2009</font></p>
<p><font size="2">&nbsp;</font></p>
<p><strong><font size="2">Distinciones Acad�micas</font></strong></p>
<p><font size="2">11 de mayo de 2009</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Miembro del Registro CONACYT de Evaluadores Acreditados (RCEA)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; �rea VII: Ingenier�a e Industria</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Consejo Nacional de Ciencia y Tecnolog�a (CONACYT)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M�xico</font></p>
<p><font size="2">1 de septiembre de 2008</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Candidato a Investigador Nacional (SNI-C)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sistema Nacional de Investigadores (SNI)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Consejo Nacional de Ciencia y Tecnolog�a (CONACYT)</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M�xico</font></p>
<p><font size="2">8 de junio de 2007</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Summa Cum Laude</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Estudios a Nivel Profesional en Ciencias de la Computaci�n</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad de las Am�ricas, Puebla</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Exhacienda de Santa Catarina M�rtir, San Andr�s Cholula, Puebla, M�xico</font></p>

<p><font size="2">15 de octubre de 2003</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Beca Excelencia Posgrado</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Para Estudios en el Programa del Doctorado en Ciencias de la Computaci�n</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fundaci�n Universidad de las Am�ricas, Puebla</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Exhacienda de Santa Catarina M�rtir, San Andr�s Cholula, Puebla, M�xico</font></p>
<p><font size="2">8 de octubre de 2003</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mejor art�culo presentado en la sesi�n: Sistemas �pticos, Tecnolog�as y Aplicaciones</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "<em>Presentando una Metodolog�a para la Visualizaci�n del Desenvolvimiento de un Hipercubo 4D</em>"</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Autores: Ricardo P�rez-Aguila &amp; Antonio Aguilera</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2da. Conferencia Iberoamericana en Sistemas, Cibern�tica e Inform�tica CISCI 2003</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Orlando, Florida, EUA</font></p>
<p><font size="2">6 de junio de 2003</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cum Laude</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Estudios a Nivel Posgrado en Ciencias (Especialidad en Sistemas Computacionales)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fundaci�n Universidad de las Am�ricas, Puebla</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Exhacienda de Santa Catarina M�rtir, San Andr�s Cholula, Puebla, M�xico</font></p>
<p><font size="2">25 de octubre de 2002</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Menci�n Honor�fica</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; XV Certamen Nacional de Tesis de Inform�tica y Computaci�n de la ANIEI</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Segundo Lugar a Nivel Licenciatura en la Categor�a Computaci�n</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Asociaci�n Nacional de Instituciones de Educaci�n en Inform�tica, A.C. y </font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; la Universidad de Guadalajara</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font><font size="2">Universidad de Guadalajara. Guadalajara, Jalisco, M�xico</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tambi�n mencionada en:</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CNCIIC 2002 Avances en Inform�tica y Computaci�n</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; XV Congreso Nacional y I Congreso Internacional de Inform�tica y Computaci�n de ANIEI</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Editores: Juan Humberto Sossa Azuela, Lourdes S�nchez Guerrero</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ISBN: 970-18-9042, 970-18-9044-2</font></p>
<p><font size="2">6 de marzo de 2002:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Menci�n Honor�fica</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Estudios a Nivel Profesional en Ingenier�a en Sistemas Computacionales</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fundaci�n Universidad de las Am�ricas, Puebla</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Exhacienda de Santa Catarina M�rtir, San Andr�s Cholula, Puebla, M�xico</font></p>
<p><font size="2">&nbsp;</font></p>
<p><strong><font size="2">Otros Estudios</font></strong></p>
<p><font size="2">Agosto 2003 a julio 2005</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Asignaturas de la Licenciatura en Matem�ticas cursadas como estudiante invitado:</font></p>

<ul>
<li><font size="2"><em>Simulaci�n Computacional en Matem�ticas y Econom�a</em> (Visualizaci�n y simulaci�n de modelos econ�micos, fractales, aut�matas celulares, modelos matem�ticos y f�sicos).</font> 
</li><li><font size="2"><em>An�lisis Matem�tico I</em> (Teor�a de la medida e integraci�n de Lebesgue).</font> 
</li><li><font size="2"><em>An�lisis Matem�tico II</em> (Teor�a de espacios m�tricos, espacios de Banach y espacios vectoriales topol�gicos).</font> 
</li><li><font size="2"><em>Geometr�a Diferencial</em> (Teor�a de curvas y superficies en t�rminos de los vectores que definen la orientaci�n, la curvatura y la torsi�n).</font> 

</li><li><font size="2"><em>Visualizaci�n Cient�fica</em> (Graficaci�n en dos y tres dimensiones mediante las librer�as OpenGL y GLUT).</font> 
</li><li><font size="2"><em>C�lculo III</em> (Teor�a del c�lculo diferencial de funciones de varias variables con aplicaciones al c�lculo vectorial).</font> 
</li><li><font size="2"><em>C�lculo IV</em> (Teor�a de integraci�n de funciones de varias variables con aplicaciones al c�lculo vectorial).</font> 
</li><li><font size="2"><em>Introducci�n a la Historia de las Matem�ticas Modernas</em> (An�lisis del desarrollo de la Matem�tica desde el siglo XIX hasta la actualidad).</font> 
</li><li><font size="2"><em>Algebra Lineal</em> (Espacios vectoriales, transformaciones lineales y su representaci�n mediante matrices, transformaciones ortogonales y unitarias, formas bilineales).</font> 

</li><li><font size="2"><em>Ecuaciones Diferenciales Ordinarias</em> (Teor�a de las ecuaciones diferenciales ordinarias incluyendo los teoremas de existencia y unicidad de las soluciones de �stas).</font> 
</li><li><font size="2"><em>Topolog�a</em> (Presentaci�n moderna de la topolog�a de conjuntos).</font> 
</li><li><font size="2"><em>C�lculo Cient�fico</em> (C�lculos simb�licos y num�ricos mediante Fortran, visualizaci�n de modelos y soluciones mediante graficaci�n en dos y tres dimensiones utilizando Matlab).</font></li></ul>
<p>
</p><p><font size="2"></font></p><font size="2">&nbsp;</font> 
<p></p>
<p><strong><font size="2">Publicaciones en Revistas y Congresos con Arbitraje</font></strong></p>

<ul>
<li><font size="2">24&nbsp;art�culos en Revistas y Congresos Internacionales con arbitraje. </font>
</li><li><font size="2">7&nbsp;art�culos en Congresos Nacionales con arbitraje. </font>
</li><li><font size="2">V�ase la secci�n </font><a href="http://ricardo.perez.aguila.googlepages.com/ndorthogonalpolytopes-modelingandvisualization"><font color="#000099" size="2">Research: n-Dimensional Polytopes - Modeling and Visualization</font></a><font size="2"> para una descripci�n detallada de las publicaciones.</font></li></ul>
<p><strong><font size="2"></font></strong>&nbsp;</p>
<p><strong><font size="2">Publicaciones Referenciadas en Art�culos, Tesis o Libros</font></strong></p>
<p><font size="2">2008</font></p>

<ul>
<li><font size="2">Nayak, Arvind; Chaudhuri, Subhasis &amp; Inamdar, Shilpa. Color Transfer and its Applications. Speech, Audio, Image and Biomedical Signal Processing using Neural Networks (Studies in Computational Intelligence, Volume 83), pp. 217-241. Editors: Prasad, B. &amp; Prasanna, S.R.M. Springer-Verlag Berlin Heidelberg, 2008. ISBN: 978-3-540-75397-1.</font></li></ul>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Publicaci�n referenciada:</font></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P�rez-Aguila, Ricardo &amp; Aguilera, Antonio. General n-Dimensional Rotations. Short Communication&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Papers Proceedings of the 12th International Conference in Central Europe on Computer Graphics,&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Visualization and Computer Vision WSCG 2004, Volume I, pp. 1-8. Editors: Scopigno, R. &amp; Skala, V.&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ISBN: 80-903100-5-2. February 2 to 6, 2004. Plzen, Czech Republic.</p>

<p><font size="2">2007</font></p>
<ul>
<li><font size="2">Lozi, Ren�. Perspectives en Perspective. La Recherche, Number 411, pp. 82-83. ISSN: 0029-5671.</font></li></ul>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Publicaci�n referenciada:</font></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P�rez Aguila, Ricardo &amp; Aguilera, Antonio. A Method For Obtaining The Tesseract By Unraveling The&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4D&nbsp;Hypercube. Journal of the 10th International Conference in Central Europe on Computer Graphics,&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Visualization and Computer Vision WSCG 2002. Volume 10, Number 1, pp. 1-8. Editor: Skala, V.&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; February 4 to 8, 2002. Plzen, Czech Republic. Hardcopy's ISSN: 1213-6972; CD's ISSN: 1213-6980;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On-line ISSN: 1213-6964.</p>

<p><strong></strong><font size="2">&nbsp;</font><font size="2">2006</font></p>
<ul>
<li><font size="2">Sakai, Yukuhito &amp; Hashimoto, Shuji. Interactive Four-Dimensional Space Visualization Using Five-Dimensional Homogeneous Processing for Intuitive Understanding. The Journal of The Institute of Image Information and Television Engineers. Vol. 60 (2006), No. 10, pp. 1630-1647. ISSN: 1881-6908 (Online), 1342-6907 (Print).</font></li></ul>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Publicaciones referenciadas:</font></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P�rez Aguila, Ricardo &amp; Aguilera, Antonio. A Method For Obtaining The Tesseract By Unraveling The&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4D&nbsp;Hypercube. Journal of the 10th International Conference in Central Europe on Computer Graphics,&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Visualization and Computer Vision WSCG 2002. Volume 10, Number 1, pp. 1-8. Editor: Skala, V.&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; February 4 to 8, 2002. Plzen, Czech Republic. Hardcopy's ISSN: 1213-6972; CD's ISSN: 1213-6980;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On-line ISSN: 1213-6964.</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P�rez-Aguila, Ricardo. 4D Orthogonal Polytopes. B.Sc. Thesis. Universidad de las Am�ricas, Puebla,&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2001.</p>
<ul>
<li><font size="2">W�rz, Stefan. 3D Parametric Intensity Models for the Localization of 3D Anatomical Point Landmarks and 3D Segmentation of Human Vessels. PhD&nbsp;thesis, KOGS, Faculty of Informatics, University of Hamburg, Germany. DISKI 299, infix/Aka, Berlin, Germany, 2006. ISBN: 3-89838-299-0 (Aka), 1-58603-635-1 (IOS Press).&nbsp;</font></li></ul>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Publicaci�n referenciada:</font></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P�rez-Aguila, Ricardo &amp; Aguilera, Antonio. General n-Dimensional Rotations. Short Communication&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Papers Proceedings of the 12th International Conference in Central Europe on Computer Graphics,&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Visualization and Computer Vision WSCG 2004, Volume I, pp. 1-8. Editors: Scopigno, R. &amp; Skala, V.&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ISBN: 80-903100-5-2. February 2 to 6, 2004. Plzen, Czech Republic.</p>

<ul>
<li><font size="2">Aguilera, Julieta. Complex, flexible, virtual environments based on a four dimensional grid. SPIE <br>N</font><font size="2">ewsroom: Optics &amp; Photonics Technical and Industry News. The International Society for Optical <br></font><font size="2">Engineering. News, technical articles and products focused on Communications &amp; Networking. <br>ISSN: 1818-2259. SPIE Newsroom�s Web Site (September 2006): <br></font><a href="http://newsroom.spie.org/x3803.xml" target="julieta1"><font color="#000099" size="2">http://newsroom.spie.org/x3803.xml</font></a><font size="2"></font></li></ul>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Publicaci�n referenciada:</font></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P�rez-Aguila, Ricardo. The Extreme Vertices Model in the 4D space and its Applications in the&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Visualization and Analysis of Multidimensional Data Under the Context of a Geographical&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Information System. Thesis for the Master�s Degree in Sciences (specialty in Computer Systems&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Engineering). Universidad de las Am�ricas, Puebla, 2003.</p><font size="2">

<ul>
<li>Aguilera, Julieta. Unfolding Space. Thesis Project Documentation. Electronic Visualization. University of Illinois at Chicago. Spring, 2006. Thesis Project Web Site (May 2006): <a href="http://www.evl.uic.edu/julieta/thesis" target="julieta2"><font color="#000099">http://www.evl.uic.edu/julieta/thesis</font></a></li></ul>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Publicaci�n referenciada:</p></font>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P�rez-Aguila, Ricardo. The Extreme Vertices Model in the 4D space and its Applications in the&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Visualization and Analysis of Multidimensional Data Under the Context of a Geographical&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Information System. Thesis for the Master�s Degree in Sciences (specialty in Computer Systems&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Engineering). Universidad de las Am�ricas, Puebla, 2003.</p><font size="2">
<ul>

<li>Aguilera, Julieta. Virtual Reality and the Unfolding of Higher Dimensions. Stereoscopy Displays and Virtual Reality Systems XIII: The Engineering Reality of Virtual Reality 2006. Editors: Woods, A.J.; Merritt, J.O.; Dodgson, N.A.; Bolas, M.T. &amp; McDowall, I.E. Proceedings of SPIE's Electronic Imaging 2006, vol. 6055. San Jose, CA, January, 2006.</li></ul>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Publicaci�n referenciada:</p></font>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P�rez-Aguila, Ricardo. The Extreme Vertices Model in the 4D space and its Applications in the&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Visualization and Analysis of Multidimensional Data Under the Context of a Geographical&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Information System. Thesis for the Master�s Degree in Sciences (specialty in Computer Systems&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Engineering). Universidad de las Am�ricas, Puebla, 2003.</p><font size="2">
<p>2005</p>

<ul>
<li>Ad�n, V�ctor Gabriel. Hierarchical music structure analysis, modeling and resynthesis: a dynamical systems and signal processing approach. Thesis for the Master of Science Degree. Dept. of Architecture. Program in Media Arts and Sciences. Massachusetts Institute of Technology, September 2005. MIT�s online institutional repository: <a href="http://hdl.handle.net/1721.1/33896" target="tesismit"><font color="#000099">http://hdl.handle.net/1721.1/33896</font></a></li></ul>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Publicaci�n referenciada:</p></font>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P�rez-Aguila, Ricardo &amp; Aguilera, Antonio. General n-Dimensional Rotations. Short Communication&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Papers Proceedings of the 12th International Conference in Central Europe on Computer Graphics,&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Visualization and Computer Vision WSCG 2004, Volume I, pp. 1-8. Editors: Scopigno, R. &amp; Skala, V.&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ISBN: 80-903100-5-2. February 2 to 6, 2004. Plzen, Czech Republic.</p>

<ul>
<li><font size="2">MacFadyen, James &amp; Andricioaei, Ioan. A skewed-momenta method to efficiently generate conformational-transition trajectories. J. Chem. Phys. Vol. 123, number 7, article 074107 (2005). Scitation Web Site (May 2006): </font><a href="http://link.aip.org/link/?JCP/123/074107/1" target="journalphy"><font color="#000099" size="2">http://link.aip.org/link/?JCP/123/074107/1</font></a></li></ul>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="2"> Publicaci�n referenciada:</font></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P�rez-Aguila, Ricardo &amp; Aguilera, Antonio. General n-Dimensional Rotations. Short Communication&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Papers Proceedings of the 12th International Conference in Central Europe on Computer Graphics,&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Visualization and Computer Vision WSCG 2004, Volume I, pp. 1-8. Editors: Scopigno, R. &amp; Skala, V.&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ISBN: 80-903100-5-2. February 2 to 6, 2004. Plzen, Czech Republic.</p>

<ul>
<li><font size="2">Kolcun, Alexej. 3D Visibility of 4D Convex Polyhedra. Posters Papers Proceedings of the 13th International Conference in Central Europe on Computer Graphics, Visualization and Computer Vision WSCG 2005, pp. 35-36. Editor: Skala, V. ISBN: 80-903100-8-7. January 31 to February 4, 2005. Plzen, Czech, Republic. </font></li></ul>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Publicaci�n referenciada:</font></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P�rez-Aguila, Ricardo &amp; Aguilera, Antonio. General n-Dimensional Rotations. Short Communication&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Papers Proceedings of the 12th International Conference in Central Europe on Computer Graphics,&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Visualization and Computer Vision WSCG 2004, Volume I, pp. 1-8. Editors: Scopigno, R. &amp; Skala, V.&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ISBN: 80-903100-5-2. February 2 to 6, 2004. Plzen, Czech Republic.</p>

<p><font size="2">2004</font></p>
<ul>
<li><font size="2">Bakke, Arne Magnus. Visualization of&nbsp;multispectral color data. Master Thesis, Royal Institute of Technology, Sweden, 2004. Royal Institute of Technology Report List 2005 Web Site:&nbsp;<a href="http://www.nada.kth.se/utbildning/grukth/exjobb/rapportlistor/2005/index.html" target="paperacm"><font color="#000099" size="2">http://www.nada.kth.se/utbildning/grukth/exjobb/rapportlistor/2005/index.html</font></a></font></li></ul>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Publicaci�n referenciada:</font></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P�rez-Aguila, Ricardo. The Extreme Vertices Model in the 4D space and its Applications in the&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Visualization and Analysis of Multidimensional Data Under the Context of a Geographical&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Information System. Thesis for the Master�s Degree in Sciences (specialty in Computer<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Systems&nbsp;Engineering). Universidad de las Am�ricas, Puebla, 2003.</p>

<ul>
<li><font size="2">Kolcun, Alexej. Visibility criterion for planar faces in 4D. Proceedings of the Spring Conference on Computer Graphics SCCG 2004, pp. 216 - 219. Editor: Pasko, Alexander. April 22 - 24, 2004. Budmerice, Slovakia. ISBN: 1-58113-914-4. ACM's Digital Library Web Site (September 2005): </font><a href="http://doi.acm.org/10.1145/1037210.1037245" target="paperacm"><font color="#000099" size="2">http://doi.acm.org/10.1145/1037210.1037245</font></a></li></ul>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="2"> Publicaci�n referenciada:</font></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P�rez-Aguila, Ricardo &amp; Aguilera, Antonio. General n-Dimensional Rotations. Short Communication&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Papers Proceedings of the 12th International Conference in Central Europe on Computer Graphics,&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Visualization and Computer Vision WSCG 2004, Volume I, pp. 1-8. Editors: Scopigno, R. &amp; Skala, V.&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ISBN: 80-903100-5-2. February 2 to 6, 2004. Plzen, Czech Republic.</p>

<ul>
<li><font size="2">Micheal, Salvatore Gerard. Space, Elastic And Impeding: Two Qualities Of Space Define Energy Which Defines Elementary Particles And Their Interactions. Universal Publishers, 2004. ISBN: 1581125070. Universal Publishers� Book Web Site: <a href="http://www.universal-publishers.com/book.php?method=ISBN&amp;book=1581125070" target="bookphy"><font color="#000099">http://www.universal-publishers.com/book.php?method=ISBN&amp;book=1581125070</font></a></font></li></ul><font size="2">
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Publicaci�n referenciada:</p></font>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P�rez-Aguila, Ricardo. The Extreme Vertices Model in the 4D space and its Applications in the&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Visualization and Analysis of Multidimensional Data Under the Context of a Geographical&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Information System. Thesis for the Master�s Degree in Sciences (specialty in Computer Systems&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Engineering). Universidad de las Am�ricas, Puebla, 2003.</p>

<p>2002</p>
<ul>
<li><font size="2">R�ber, Niklas. Visualization of Fuel Cell Simulations. Diplom thesis. Otto - von - Guericke - University Magdeburg. November, 2002. Web Site of Tobias Isenberg (Advisor): </font><a href="http://pages.cpsc.ucalgary.ca/%7Eisenberg/advising.html" target="thesisniklas"><font color="#000099" size="2">http://pages.cpsc.ucalgary.ca/~isenberg/advising.html</font></a></li></ul>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Publicaci�n referenciada:</font></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P�rez Aguila, Ricardo &amp; Aguilera, Antonio. A Method For Obtaining The Tesseract By Unraveling The&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4D&nbsp;Hypercube. Journal of the 10th International Conference in Central Europe on Computer Graphics,&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Visualization and Computer Vision WSCG 2002. Volume 10, Number 1, pp. 1-8. Editor: Skala, V.&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; February 4 to 8, 2002. Plzen, Czech Republic. Hardcopy's ISSN: 1213-6972; CD's ISSN: 1213-6980;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On-line ISSN: 1213-6964.</p>

<p><font size="2"><strong></strong></font>&nbsp;</p>
<p><font size="2"><strong>Art�culos de Divulgaci�n Cient�fica</strong></font></p>
<p><font size="2">2006</font></p>
<ul>
<li><font size="2">P�rez-Aguila, Ricardo. Dimensional Analogies: A Methodology for Introducing the Study of Higher Dimensional Spaces to Computer Science Students. Newsletter of the IEEE Computational Intelligence Society � Chapter Mexico, Vol. 2, No. 2, pp. 1-7. Editors: Castillo, O. &amp; Melin, P. May, 2006. IEEE Chapter Mexico Web Site (May 2006): </font><a href="http://www.hafsamx.org/cis-chmexico/page5.html" target="chaptermexico"><font color="#000099" size="2">http://www.hafsamx.org/cis-chmexico/page5.html</font></a></li></ul>
<p><strong><font size="2"></font></strong>&nbsp;</p>
<p><strong><font size="2">Ponencias</font></strong></p>
<ul>
<li><font size="2">11&nbsp;ponencias en Congresos Internacionales</font> 

</li><li><font size="2">8&nbsp;ponencias en Congresos Nacionales</font></li></ul><font size="2">
<p><font size="2">28 de febrero de 2009</font></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; XIX International Conference on Electronics, Communications, and Computers</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (CONIELECOMP 2009)</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad de las Am�ricas, Puebla (UDLAP)</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ponencia:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "<em>Brain Tissue Characterization Via Non-Supervised One-Dimensional Kohonen Networks"</em></p>
<p><font size="2">7 de noviembre de 2008</font></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6to. Congreso Nacional de Ciencias de la Computaci�n (CONCIC 2008)</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Benem�rita Universidad Aut�noma de Puebla (BUAP)</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ponencia:</p>
<p><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "Concise Representation of 3D Datasets Through 4D Orthogonal Polytopes"</em></p>

<p><font size="2">16 de octubre de 2008</font></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; III Simposium de Software Libre de la Mixteca</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad Tecnol�gica de la Mixteca (UTM)</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ponencia:</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>"Implementaci�n de Esquemas de Representaci�n de Politopos Mediante Java"</em></p>
<p><font size="2">10 de octubre de 2008</font></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jornada de Vinculaci�n Multidisciplinaria</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad de la Sierra Sur (UNSIS)</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ponencia:</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "<em>Segmentaci�n Autom�tica No Supervisada de Tomograf�as Computadas Craneales."</em></p>
<p><font size="2">28 de agosto de 2008</font></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ciclo de Presentaci�n de L�neas de Investigaci�n</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Curso Proped�utico Maestr�a en Electr�nica y Computaci�n)</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad Tecnol�gica de la Mixteca (UTM)</p>
<p><font size="2">6&nbsp;de&nbsp;noviembre de 2007</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; II Magno Congreso&nbsp;Internacional de Computaci�n CIC-IPN</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Instituto Polit�cnico Nacional</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ponencia:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>"Modeling and Manipulating 3D Datasets through the Extreme Vertices&nbsp;Model in the</em></font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>n-Dimensional Space (nD-EVM).</em>"</font></p></font>
<p><font size="2">24 de octubre de 2007</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14a. Semana Nacional de Ciencia y Tecnolog�a</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Consejo Nacional de Ciencia y Tecnolog�a, Universidad Tecnol�gica de la Mixteca</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ponencia:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "<em>Visualizaci�n de Objetos en la Cuarta Dimensi�n</em>".</font></p>

<p><font size="2">6 de octubre de 2006</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; XXXIX Congreso Nacional de la Sociedad Matem�tica Mexicana</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sociedad Matem�tica Mexicana; Universidad Ju�rez Aut�noma de Tabasco</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ponencia:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>"Visualizaci�n de politopos n-dimensionales: desde las sombras de Plat�n hasta la incursi�n de la</em></font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>computadora.</em>"</font></p>
<p><font size="2">7 de septiembre de 2006</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3nd International Conference on Electrical and Electronics Engineering and XII Conference on </font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Electrical&nbsp;</font><font size="2">Engineering, ICEEE and CIE 2006</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Centro de Investigaci�n&nbsp;y de Estudios&nbsp;Avanzados del I.P.N., Departamento de Ingenier�a El�ctrica</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ponencia:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "<em>Enumerating the Configurations in the n-Dimensional Orthogonal Polytopes Through P�lya's</em></font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Countings and A Concise Representation.</em>"</font></p>

<p><font size="2">18 de noviembre de 2005</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; X Iberoamerican Congress on Pattern Recognition, CIARP 2005</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ponencia:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "<em>Non-Supervised Classification of 2D Color Images Using Kohonen Networks and a Novel Metric.</em>"</font></p>
<p><font size="2">7 de septiembre de 2005</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2nd International Conference on Electrical and Electronics Engineering and XI Conference on</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Electrical Engineering, ICEEE and CIE 2005</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Centro de Investigaci�n y de Estudios Avanzados del I.P.N., Departamento de Ingenier�a El�ctrica.</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ponencia:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "<em>Mathematical Tools for Speeding Up the Determination of Configurations of the n-Dimensional</em></font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Orthogonal Pseudo-Polytopes.</em>"</font></p>

<p><font size="2">28 de febrero de 2005</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; XV International Conference on Electronics, Communications, and Computers, CONIELECOMP 2005</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad de las Am�ricas, Puebla</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ponencia:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "<em>A Procedure for Comparing Color 2-Dimensional Images Through their Extrusions to the </em></font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>5-Dimensional Colorspace.</em>"</font></p>

<p><font size="2">18 de febrero de 2004</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; XIV International Conference on Electronics, Communications, and Computers, </font></p><font size="2">
</font><p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>CONIELECOMP 2004</font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad de las Am�ricas, Puebla</font></font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ponencia:</font></font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "<em>Representing and Computing some Configuration Properties for the n-dimensional Orthogonal</em></font></font></p>

<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Pseudo-Polytopes.</em>"</font></font></p>
<p><font size="2">5 de noviembre de 2003</font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; XXX Aniversario del Programa Educativo de Computaci�n en la BUAP</font></font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Benem�rita Universidad Aut�noma de Puebla</font></font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Facultad de Ciencias de la Computaci�n</font></font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ponencia:</font></font></p>

<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "<em>A Procedure for Comparing Color 2-Dimensional Images Through their Extrusions to the</em></font></font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>5-Dimensional Colorspace.</em>"</font></font></p>
<p><font size="2">24 de febrero de 2003</font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; XIII Congreso Internacional de Ingenier�a Electr�nica, Comunicaciones y Computadoras</font></font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CONIELECOMP 2003</font></font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fundaci�n Universidad de las Am�ricas, Puebla</font></font></p>

<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conferencia:</font></font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "<em>A new characterization for 1-dimensional elements in 4D orthogonal pseudo-polytopes.</em>"</font></font></p>
<p><font size="2">24 de febrero de 2003</font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; XIII Congreso Internacional de Ingenier�a Electr�nica, Comunicaciones y Computadoras</font></font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CONIELECOMP 2003</font></font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fundaci�n Universidad de las Am�ricas, Puebla</font></font></p>

<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conferencia:</font></font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "<em>Presenting the test-box heuristic for determining the configurations for the n-dimensional</em></font></font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>orthogonal pseudo-polytopes.</em>"</font></p>
<p><font size="2">24 de febrero de 2003</font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; XIII Congreso Internacional de Ingenier�a Electr�nica, Comunicaciones y Computadoras</font></font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CONIELECOMP 2003</font></font></p>

<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fundaci�n Universidad de las Am�ricas, Puebla</font></font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conferencia:</font></font></p>
<p><font size="2"><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "<em>Non-manifolds in n-dimensional orthogonal pseudo-polytopes.</em>"</font></font></p>
<p><font size="2">26 de febrero de 2002</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; XII Congreso Internacional de Ingenier�a Electr�nica, Comunicaciones y Computadoras</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CONIELECOMP 2002</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fundaci�n Universidad de las Am�ricas, Puebla</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ponencia:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "<em>Classifying the n-2 dimensional elements as Manifolds or Non-Manifold for n-Dimensional</em></font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>Orthogonal Pseudo-Polytopes.</em>"</font></p>
<p><font size="2">3 de octubre de 2001</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1er. Congreso de Ingenier�a en Computaci�n y Sistemas Electr�nicos.</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad Aut�noma de Tlaxcala</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ponencia:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "<em>Un m�todo para la obtenci�n del teseracto a partir del desenvolvimiento de un hipercubo (4D).</em>"</font></p>
<p><font size="2"><strong></strong>&nbsp;</font></p>
<p><font size="2"><strong>Actividades en Congresos</strong></font></p>
<p><font size="2">Noviembre de 2004</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Workshop on Deduction and Reasoning Techniques, IX Ibero-American Conference of Artificial</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Intelligence, Iberamia 2004</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; National Institute of Astrophysics, Optics and Electronics (INAOE)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Asistente.</font></p>
<p><font size="2">Marzo de 2004</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; X Congreso Internacional de Ingenier�a en Sistemas Computacionales.</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad de las Am�ricas, Puebla</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Asistente.</font></p>
<p><font size="2">Marzo de 2002</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VIII Congreso Ingenier�a en Sistemas.</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad de las Am�ricas, Puebla</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Asistente.</font></p>
<p><font size="2">Octubre de 2001</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1er. Congreso de Ingenier�a en Computaci�n y Sistemas Electr�nicos.</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad Aut�noma de Tlaxcala</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Asistente.</font></p>
<p><font size="2">Marzo de 2001</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VII Semana Acad�mica.</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad de las Am�ricas, Puebla</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Asistente.</font></p>

<p><font size="2">Marzo de 2000</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VI Congreso Internacional de Ingenier�a en Sistemas Computacionales.</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad de las Am�ricas, Puebla</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Asistente.</font></p>
<p><font size="2">Febrero de 2000</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amigos 2000: "Hacia la Generaci�n de una Biblioteca Digital Universal"</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad de las Am�ricas, Puebla</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Colaborador.</font></p>
<p><font size="2">Abril de 1999</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; V Congreso Internacional de Ingenier�a en Sistemas Computacionales.</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad de las Am�ricas, Puebla</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Asistente</font></p>
<p><font size="2">&nbsp;</font></p>
<p><font size="2"><strong>Tutoriales Impartidos</strong></font></p>

<p><font size="2">24 de marzo de 2006</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "Introducci�n al C�lculo Simb�lico y Graficaci�n usando Mathematica"</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; D�cimo Ciclo de Conferencias de F�sica y Matem�ticas</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Departamento de Actuar�a y Matem�ticas</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad de las Am�ricas, Puebla.</font></p>
<p><font size="2">&nbsp;</font></p>
<p><font size="2"><strong>Cursos Impartidos</strong></font></p>

<p><font size="2">Inteligencia Artificial</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad Tecnol�gica de la Mixteca (UTM)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nivel: Licenciatura</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodos:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2009-II (Marzo - Julio)</font></p>
<p><font size="2">Visi�n por Computadora</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad Tecnol�gica de la Mixteca (UTM)</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nivel: Maestr�a</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodos:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2009-I (Octubre 2008 - Febrero 2009)</font></p>
<p><font size="2">An�lisis de Algoritmos</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad Tecnol�gica de la Mixteca (UTM)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nivel: Licenciatura</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodos:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2009-I (Octubre 2008 - Febrero 2009)</font></p>
<p><font size="2">Algoritmos y Recorridos sobre Grafos</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad Tecnol�gica de la Mixteca (UTM)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nivel: Licenciatura</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodos:</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verano 2008 (Agosto - septiembre)</font></p>
<p><font size="2">Teor�a de Agentes</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad Tecnol�gica de la Mixteca (UTM)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nivel: Maestr�a</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodos:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre 2008-II (Marzo - julio)</font></p>
<p><font size="2">Algoritmos Gen�ticos</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad Tecnol�gica de la Mixteca (UTM)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nivel: Licenciatura</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodos:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre 2008-II (Marzo - julio)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre 2009-II (Marzo - julio)</font></p>
<p><font size="2">Redes Neuronales</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad Tecnol�gica de la Mixteca (UTM)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nivel: Licenciatura</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodos:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre 2008-II (Marzo - julio)</font></p>
<p><font size="2">Programaci�n Orientada a Objetos II</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad Tecnol�gica de la Mixteca (UTM)</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nivel: Licenciatura</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodos:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre 2008-I (Octubre 2007 - febrero 2008)</font></p>
<p><font size="2">Programaci�n de Sistemas</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad Tecnol�gica de la Mixteca (UTM)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nivel: Licenciatura</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodos:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre 2008-I (Octubre 2007 - febrero 2008)</font></p>
<p><font size="2">M�todos Num�ricos (MA-701)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Instituto Universitario de Tecnolog�a y Humanidades</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nivel: Licenciatura</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodos:</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre de Primavera 2006 (Enero - mayo)</font></p>
<p><font size="2">Geometr�a Anal�tica (MA-201)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Instituto Universitario de Tecnolog�a y Humanidades</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nivel: Licenciatura</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodos:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre de Primavera 2006 (Enero - mayo)</font></p>

<p><font size="2">Estructuras de Datos</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Instituto Universitario de Tecnolog�a y Humanidades</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nivel: Licenciatura</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodos:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre de Primavera 2007 (Enero - mayo)</font></p>
<p><font size="2">Programaci�n Estructurada</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Instituto Universitario de Tecnolog�a y Humanidades</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nivel: Licenciatura</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodos:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre de Primavera 2007 (Enero - mayo)</font></p>
<p><font size="2">Algebra Lineal y Geometr�a Anal�tica (MA-112)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Universidad de las Am�ricas, Puebla</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Departamento de Actuar�a, F�sica y Matem�ticas</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nivel: Licenciatura</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodos:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre de&nbsp;Verano 2007 (mayo - julio)</font></p>
<p><font size="2">Matem�ticas Discretas I (MA-126)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad de las Am�ricas, Puebla</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Departamento de Actuar�a,&nbsp;F�sica&nbsp;y Matem�ticas</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nivel: Licenciatura</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodos:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre de Oto�o 2006 (Agosto - diciembre)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre de Oto�o 2005 (Agosto&nbsp;- diciembre)</font></p>
<p><font size="2">Algebra Lineal (MA-127)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Universidad de las Am�ricas, Puebla</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Departamento de Actuar�a, F�sica y Matem�ticas</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nivel: Licenciatura</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodos:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre de Primavera 2007 (Enero - mayo)</font></p>
<p><font size="2">Algebra y C�lculo (MA-146)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Universidad de las Am�ricas, Puebla</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Departamento de Actuar�a, F�sica y Matem�ticas</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nivel: Licenciatura</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodos:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre de Primavera 2007 (Enero - mayo)</font></p>
<p><font size="2">Matem�ticas Discretas II (MA-284)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad de las Am�ricas, Puebla</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Departamento de Actuar�a, F�sica&nbsp;y Matem�ticas</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nivel: Licenciatura</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodos:</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre de Oto�o 2006 (Agosto - diciembre)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre de Oto�o 2005 (Agosto - diciembre)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre de Primavera 2005 (Enero - mayo)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre de Oto�o 2004 (Agosto - diciembre)</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre de Primavera 2004 (Enero - mayo)</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semestre de Oto�o 2003 (Agosto - diciembre)</font></p>
<p><font size="2">&nbsp;</font></p>
<p><font size="2"><strong>Otras Actividades</strong></font></p>
<p><font size="2">Juez</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The 2003 ACM Central America Programming Contest</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Universidad de las Am�ricas, Puebla</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9 de noviembre de 2003.</font></p>
<p><font size="2">Secuencia de Enteros A128766</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Contribuci�n&nbsp;a&nbsp;la On-Line Encyclopedia of Integer Sequences.</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Descripci�n: N�mero de n-coloramientos inequivalentes de los v�rtices del cubo bajo su grupo&nbsp; </font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ortogonal completo (de orden (2^3)*3! = 48).</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N. J. A. Sloane, The On-Line Encyclopedia of Integer Sequences.</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sequence A128766 URL: <a href="http://www.research.att.com/%7Enjas/sequences/A128766" target="paperacm"><font color="#000099" size="2">http://www.research.att.com/~njas/sequences/A128766</font></a></font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Abril 2007.</font></p>
<p><font size="2">Secuencia de Enteros A128767</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Contribuci�n&nbsp;a&nbsp;la On-Line Encyclopedia of Integer Sequences.</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Descripci�n: N�mero de n-coloramientos inequivalentes de los v�rtices del hipercubo 4D bajo su </font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;grupo ortogonal completo (de orden (2^4)*4! = 384).</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N. J. A. Sloane, The On-Line Encyclopedia of Integer Sequences.</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sequence A128767 URL: <a href="http://www.research.att.com/%7Enjas/sequences/A128767" target="paperacm"><font color="#000099" size="2">http://www.research.att.com/~njas/sequences/A128767</font></a></font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Abril 2007.</font></p>
<p><font size="2">Secuencia de Enteros A129347</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Contribuci�n&nbsp;a&nbsp;la On-Line Encyclopedia of Integer Sequences.</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Descripci�n: N�mero de n-coloramientos inequivalentes de los v�rtices del hipercubo 5D bajo su </font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;grupo ortogonal completo (de orden (2^5)*5! = 3840).</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N. J. A. Sloane, The On-Line Encyclopedia of Integer Sequences.</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sequence A129347 URL: <a href="http://www.research.att.com/%7Enjas/sequences/A129347" target="paperacm"><font color="#000099" size="2">http://www.research.att.com/~njas/sequences/A129347</font></a></font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Abril 2007.</font></p>
<p><font size="2">Secuencia de Enteros A128769</font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Contribuci�n&nbsp;a&nbsp;la On-Line Encyclopedia of Integer Sequences.</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Descripci�n: N�mero de n-coloramientos inequivalentes de los v�rtices del hipercubo 6D bajo su </font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;grupo ortogonal completo&nbsp;(de orden (2^6)*6! = 46080).</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N. J. A. Sloane, The On-Line Encyclopedia of Integer Sequences.</font></p>
<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sequence A128769 URL: <a href="http://www.research.att.com/%7Enjas/sequences/A128769" target="paperacm"><font color="#000099" size="2">http://www.research.att.com/~njas/sequences/A128769</font></a></font></p>

<p><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Abril 2007.</font>
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
