<!--BARRA LATERAL (usamos aside para barras laterales-->
		<aside id="lateral">


			<div id="carrito" class="block_aside">
				<h3>Mi carrito</h3>
				<ul>
					<?php $stats = Utils::statsCarrito(); ?>
					<li><a href="<?=base_url?>carrito/index">Productos (<?=$stats['count']?>)</a></li>
					<li><a href="<?=base_url?>carrito/index">Total: $<?=$stats['total']?></a></li>
					<li><a href="<?=base_url?>carrito/index">Ver carrito</a></li>
				</ul>
			</div>


			<div id="login" class="block_aside">

				<?php if (!isset($_SESSION['identity'])): ?>
					<h3>Entrar a la web</h3>
					<form action="<?=base_url?>usuario/login" method="POST">

						<label for="email">Email</label>
						<input type="email" name="email">

						<label for="password">Contraseña</label>
						<input type="password" name="password">

						<input type="submit" value="Ingresar">

					</form>


				<?php else:?>
					<h3><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellido?></h3>
				<?php endif;?>


				<ul>
					<?php if (isset($_SESSION['admin'])): ?>
						<li><a href="<?=base_url?>categoria/index">Gestionar Categorias</a></li>
						<li><a href="<?=base_url?>producto/gestion">Gestionar Productos</a></li>
						<li><a href="<?=base_url?>pedido/gestion">Gestionar Pedidos</a></li>
					<?php endif; ?>
					
					<?php if (isset($_SESSION['identity'])): ?>
						<li><a href="#">Mis Pedidos</a></li>
						<li><a href="<?=base_url?>usuario/logout">Cerrar Sesión</a></li>
					<?php else: ?>
						<li><a href="<?=base_url?>usuario/registro">Registrarse</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</aside>
		
	<!--CONTENIDO CENTRAL-->
	<div id="central">