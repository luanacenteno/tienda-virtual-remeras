<h1>Gestión de productos</h1>

<a href="<?=base_url?>producto/crear" class="button button-small">
	Crear producto
</a>

<?php if (isset($_SESSION['producto']) && $_SESSION['producto'] ==  'complete'): ?>
	<strong class="alert_green">El producto se ha creado correctamente</strong>
<?php elseif (isset($_SESSION['producto']) && $_SESSION['producto'] !==  'failed'): ?>
	<strong class="alert_red">Error al crear el producto</strong>
<?php endif; ?>
<?php Utils::deleteSession('producto') ?>


<?php if (isset($_SESSION['delete']) && $_SESSION['delete'] ==  'complete'): ?>
	<strong class="alert_green">El producto se ha borrado correctamente</strong>
<?php elseif (isset($_SESSION['delete']) && $_SESSION['delete'] !==  'failed'): ?>
	<strong class="alert_red">Error al borrar el producto</strong>
<?php endif; ?>
<?php Utils::deleteSession('delete') ?>
<table>
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>PRECIO</th>
		<th>STOCK</th>
		<th>ACCIONES</th>
	</tr>
	<?php while ($products = $productos->fetch_object()): ?>
		<tr>
			<td><?=$products->id;?></td>
			<td><?=$products->nombre;?></td>
			<td><?=$products->precio;?></td>
			<td><?=$products->stock;?></td>
			<td>
				<!--Añado una & en vez de ? porque es un tercer parametro get-->
				<a href="<?=base_url?>producto/editar&id=<?=$products->id?>" class="button button-gestion">Editar</a>
				<a href="<?=base_url?>producto/eliminar&id=<?=$products->id?>" class="button button-gestion button-red">Eliminar</a>
			</td>
		</tr>
	<?php endwhile; ?>
</table>