<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
<title>Subastas S.A
</title>
<script type="text/javascript" src="/Final/js/jquery-2.1.4.js"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<link rel="stylesheet" type="text/css" href="/Final/css/registroPuja.css"/>

</head>
<body>
	
		<div class="centrar">
		<h1>Subastas S.A</h1>
		<nav>
			<!--barra de navegacion de la pagina-->
			<div class="navegador">
				<ul>
					<li><a href="/Final/ListPujaHome/mostrarInicio">Inicio</a></li>	
					<li><a href="/Final/ListPujaHome/mostrarRegistroPuja">Registrar Subasta</a></li>	
					<li><a href="/Final/ListPujaHome/mostrarPerfil">Perfil</a></li>							
					<li><a href="/Final/ListPujaHome/mostrarSalir">Salir</a></li>
				</ul>
			</div>
		</nav>
		</div>

		<div class="contentBody">			
			<sectiom class="tituloRegistro">
				<header><h1>REGISTRAR SUBASTA</h1></header>
			</section>
			<!--Contenedor con los campos para el registro de una puja-->
			<div class="formulario">
				<form id="formulario1" action="/Final/pujaHome/insert" method="POST">
					<div class="camposLabel">
						<ul>
								<li><label>Subir imagen:</label></li>
								<li><label>Nombre del Producto:</label></li>
								<div class="descripcion">
								<li><label>Descripción del Producto:</label></li>
								</div>
								<div class="margenExtra">
								<li><label>Precio en el que inicia la Subasta:</label></li>
								<li><label>Tiempo de Subasta:</label></li>
								<li><label>Fecha de Entrega:</label></li>
								</div>
						</ul>
					</div>
					<div class="camposInput">
						<ul>
							<li><input id="imagen" name="imagen" type="button" value="Subir Imagen" placeholder="imagen"/>
							<li><input id="nombre" name="nombre" type="text" value="" placeholder="Nombre del Producto"/>
							<li><input class= "descripcion" id="descripcion" name="descripcion" type="text" value="" placeholder="Descripción del Producto"/></li>
							<li><input id="precio" name="precio" type="text" value="" placeholder="Precio en el que inicia la Subasta"/></li>
							<li><input id="tiempo" name="tiempo" type="text" value="" placeholder="hh:mm:ss"/></li>
							<li><input id="dentrega" name="dentrega" type="text" value="" placeholder="dd/mm/yyyy"/></li>
						</ul>
					</div>

					<?php 
					  /*session_start(); 
					  echo 'session_id(): ' . session_id(); 
					  echo "<br />\n"; 
					  print_r(session_get_cookie_params()); */
					?>
					<input id="subasta" type="submit" name="subasta" value="REGISTRAR SUBASTA">

				</form>
			</div>


		</div>

		<footer>
			<div class="final">
				<h3>Siganos En Nuestras Redes Sociales</h3>
			</div>

			<div class="redes">
				<img src="/Final/recursos/img/f.png">
				<img src="/Final/recursos/img/t.png">
				<img src="/Final/recursos/img/i.png">
			</div>
		</footer>

<script type="text/javascript" src="/Final/js/puja.js"></script>
</body>
</html>