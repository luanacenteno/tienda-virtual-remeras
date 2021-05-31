<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Tienda de Camisetas</title>
		<link rel="stylesheet" href="assets/css/styles.css">
	</head>

	<body>
		<div id="container">
		<!--CABECERA-->
			<header id="header">
				<div id="logo">
					<img src="assets/img/camiseta.png" alt="Camieta Logo">
					<a href="index.php">
						Tienda de Camisetas
					</a>
				</div>
			</header>

		<!--MENU-->
			<nav id="menu">
				<ul>
					<li>
						<a href="#">Inicio</a>
					</li>

					<li>
						<a href="#">Categoria 1</a>
					</li>

					<li>
						<a href="#">Categoria 2</a>
					</li>

					<li>
						<a href="#">Categoria 3</a>
					</li>

					<li>
						<a href="#">Categoria 4</a>
					</li>

					<li>
						<a href="#">Categoria 5</a>
					</li>
				</ul>
			</nav>

			<div id="content">

		<!--BARRA LATERAL (usamos aside para barras laterales-->
				<aside id="lateral">
					<div id="login" class="block_aside">
						<h3>Entrar a la web</h3>
						<form action="#" method="POST">
							<label for="email">Email</label>
							<input type="email" name="email">

							<label for="password">Contraseña</label>
							<input type="password" name="password">

							<input type="submit" name="Enviar">
						</form>
						<ul>	
							<li><a href="#">Mis Pedidos</a></li>
							<li><a href="#">Gestionar Pedidos</a></li>
							<li><a href="#">Gestionar categorias</a></li>
						</ul>
					</div>
				</aside>


		<!--CONTENIDO CENTRAL-->
				<div id="central">
					<h1>Productos destacados</h1>
	 				<!--producto 1-->
					<div class="product">
						<img src="assets/img/camiseta.png">
						<h2>Camiseta Azul Ancha</h2>
						<p>30 euros</p>
						<a href="#" class="button">Comprar</a>
					</div>

					<!--producto 2-->
					<div class="product">
						<img src="assets/img/camiseta.png">
						<h2>Camiseta Azul Ancha</h2>
						<p>30 euros</p>
						<a href="#" class="button">Comprar</a>
					</div>

					<!--producto 3-->
					<div class="product">
						<img src="assets/img/camiseta.png">
						<h2>Camiseta Azul Ancha</h2>
						<p>30 euros</p>
						<a href="#" class="button">Comprar</a>
					</div>

				</div>
		</div>
		<!--PIE DE PÁGINA-->
			<footer id="footer">
				<p>Desarrollado por Luana Dayana Centeno &copy; <?=date('Y')?> </p>
			</footer>
		
	</body>
</html>
