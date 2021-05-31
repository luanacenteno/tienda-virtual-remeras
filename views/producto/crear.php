<?php if(isset($edit) && isset($product) && is_object($product)): ?>
	<h1>Editar producto <?=$product->nombre?></h1>
	<?php $url_action = base_url."producto/save&id=".$product->id; ?>
<?php else: ?>
	<h1>Crear nuevo producto</h1>
	<?php $url_action = base_url."producto/save"; ?>
<?php endif; ?>

<div class="form-container">
	<form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">

		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" value="<?=isset($product) && is_object($product) ? $product->nombre : ''; ?>" >

		<label for="descripcion">Descripcion</label>
		<textarea name="descripcion"><?=isset($product) && is_object($product) ? $product->descripcion : ''; ?></textarea> 

		<label for="precio">Precio</label>
		<input type="number" name="precio" value="<?=isset($product) && is_object($product) ? $product->precio : ''; ?>">

		<label for="stock">Stock</label>
		<input type="number" name="stock" value="<?=isset($product) && is_object($product) ? $product->stock : ''; ?>">

		<label for="categoria">Categoria</label>
		<?php $categorias = Utils::showCategorias(); ?>
		<select name="categoria">
				<?php while ($category = $categorias->fetch_object()): ?>

							<option value="<?= $category->id ?>" <?=isset($product) && is_object($product) && $category->id == $product->categoria_id ? 'selected' : ''; ?>>
								<?=$category->nombre?>
							</option>

				<?php endwhile; ?>
		</select>

		<label for="imagen">Imagen</label>
		<?php if(isset($product) && is_object($product) && !empty($product->imagen)): ?> 
			<img src="<?=base_url?>uploads/images/<?=$product->imagen?>" class="thumb">
		<?php endif; ?>
		<input type="file" name="imagen">

		<input type="submit" value="Guardar">
	</form>
</div>