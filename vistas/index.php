<!DOCTYPE HTML>
<html>
	<head>
		<title>Subastas S.A.</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="/Final/css/main.css"/>
		<script type="text/javascript" src="/Final/js/jquery-2.1.4.js"></script>
   		<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

		</style>
	</head>
	<body>

		<header>

			<!-- contenedor en el que se encuentran los campos para el inicio de sesion -->
			<div class="login">		
					<div class="loginNombre">
					<h1>Subastas S.A.</h1>
					</div>
					<?php
						if(!empty($parametros))
						{
							if( array_key_exists("login", $parametros))
							{
								if($parametros["login"]){
									?>
									<script type="text/javascript">
										alert("Logueado");
									</script>
									<?php
								}else{
									?>
									<script type="text/javascript">
                                        alert("Login Fallido");
                                    </script>
									
									<?php
								}
							}
						}
					 ?>
				
					<div class="loginInicio">
						<?php

							if(!isset($_COOKIE["chsm"]))
							{
						?>
						<form id="formuloguear" action="/Final/home/login" method="POST">
							<label>Correo eléctronico: </label>
							<input id="correoL" name="correo" type="text" value="" placeholder="Ingresa tu correo eléctronico"/>
							<label>Contraseña: </label>
							<input id="passwordL" name="pass" type="password" value="" placeholder="Ingresa tu contraseña"/>
							<input type="submit" id="loguear" name="Login" value="Login">
						</form>
						<?php

							}
							else{
						?>
							<a href= "/Final/home/logout">Cerrar Sesión</a>
						<?php	
							}
						?>
						
					</div>
					<div class="logout">			
						<form action="/Final/home/listadoPuja" method="POST">
							<button>Invitado</button>
						</form>
					</div>				
			</div>				
		</header>


		<div class="contenido">
			<div class="imagen">
				<img src="/Final/recursos/img/subasta.jpg">

					<!--contenedor en el que se encuentran los campos para el formulario del registro de usuario -->
					<div class="registro">

						<form id="registroformu" action="/Final/home/insert" method="POST">

							<label>Registrate</label>
							<br>
							<input id="nombre" name="nombre" type="text" value="" placeholder=" Nombre Completo o Empresa"/>
							<br>						
							<input id="correo" name="correo" type="email" value="" placeholder=" Correo Eléctronico"/>
							<br>
								<select id="pais" class="comboPais">
									<option value="0" selected>Pais</option>
									<option value="1">Colombia</option>
									<option value="2">Ecuador</option>
									<option value="1">Peru</option>
								</select>
							<br>
								<select id="departamento" class="comboDepto">
									<option value="0" selected>Departamento</option>
									<option value="1">Quindio</option>
									<option value="2">Amazonas</option>
									<option value="1">Caldas</option>
								</select>
							<br>
							<input id="direccion" name="direccion" type="text" value="" placeholder=" Dirección"/>
							<br>
							<input id="telefono" name="telefono" type="text" value="" placeholder=" Teléfono"/>
							<br>
							<input id="pass" name="pass" type="password" value="" placeholder=" Contraseña"/>	
							<br>					
							<input id="pass2" name="pass2" type="password" value="" placeholder=" Repite Contraseña"/>
							<br>
							<div class="terminos">
								<div class="terminos1">
									<input class="selector" type="checkbox" name="check" id="check"/>
								</div>
								<div class="terminos2">
									<h3>Acepto los terminos y condiciones de uso de la pagina Subastas S.A</h3>	
								</div>
							</div>						
							<input id="registrarsubmit" type="submit" value="Registro">
						</form>
					</div>
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
	<script type="text/javascript" src="/Final/js/index.js"></script>
	</body>
</html>