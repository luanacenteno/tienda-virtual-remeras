<h1>Gestionar categorias</h1>

<a href="<?=base_url?>categoria/crear" class="button button-small">
	Crear categoria
</a>

<table>
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
	</tr>
	<?php while ($category = $categorias->fetch_object()): ?>
		<tr>
			<td><?=$category->id;?></td>
			<td><?=$category->nombre;?></td>
		</tr>
	<?php endwhile; ?>
</table>