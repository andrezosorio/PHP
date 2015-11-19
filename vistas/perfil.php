<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
<title>Subastas S.A
</title>
<link rel="stylesheet" type="text/css" href="/Final/css/perfil.css"

</head>
<body>
	
		<div class="centrar">
		<h1>Subastas S.A</h1>
		<nav>
			<!--barra de navegacion-->
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

		<div class="tituloRegistro">
			<header><h1>PERFIL</h1></header>
		</div>

		<div class="contentBody">
			
			<!--contenedor con los elementos dela informacion de perfil del usuario-->
			<div class="contenidoPerfil">
				<div class="imagen">
					<img src="/Final/recursos/img/andres.jpg">
				</div>
				<input id="foto" name="foto" type="button" value="Subir foto de Perfil" placeholder="Foto"/>
				<br>
				<label>Nombre de Usuario :</label>
				<label>Andrés Osorio Bedoya</label>
				<br>
				<label>Correo Eléctronico :</label>
				<label>andrez0743@gmail.com</label>
				<br>
				<label>País :</label>
				<label>Colombia</label>
				<br>
				<label>Estado :</label>
				<label>Quindío</label>
				<br>
				<label>Dirección :</label>
				<label>Calle 10N # 18-108 Providencia</label>
				<br>
				<label>Teléfono :</label>
				<label>+57 310 526 5131</label>
				<br>
				<label>Pujas Disponibles :</label>
				<label>10</label>
				<input id="pujas" name="pujas" type="button" value="Comprar Pujas" placeholder="Pujas"/>
			</div>	
			<!-- contenedor con la lista de pujas compradas por el usuario-->
			<div class="contenidoCompras">
				<header><h1>LISTADO DE COMPRAS</h1></header>
				
					<label>Casa de Verano...$26000</label>					
					<input id="comprar" name="comprar" type="button" value="Comprar" placeholder="Comprar"/>					
					<input id="ignorar" name="ignorar" type="button" value="Ignorar" placeholder="Ignorar"/>
					<br>
					<label>Moto Acuática.......$12000</label>
					<input id="comprar" name="comprar" type="button" value="Comprar" placeholder="Comprar"/>					
					<input id="ignorar" name="ignorar" type="button" value="Ignorar" placeholder="Ignorar"/>
					<br>
					<label>PS3.........................$10000</label>
					<input id="pagado" name="pagado" type="button" value="Pagado" placeholder="Pagado"/>
				

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


</body>
</html>