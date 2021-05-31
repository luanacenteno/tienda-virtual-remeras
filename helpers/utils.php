<?php

class Utils{

	public static function deleteSession($name){

		if (isset($_SESSION[$name])){
				$_SESSION[$name] = null;
				unset($_SESSION[$name]);
		}
		return $name;
	}

	public static function isAdmin(){
		if (!isset($_SESSION['admin'])) {
			header('Location:'.base_url);
		}else{
			return true;
		}
	}

	public static function showCategorias(){
		require_once 'models/categoria.php';

		$categoria = new Categoria();
		$categorias = $categoria->getAll();

		return $categorias;
	}

	/*public static function showProductos(){

	<?php while ($product = $productos->fetch_object()): ?>
	<!--productos-->
<div class="product">
	<?php if ($product->imagen != null): ?>
		<img src="<?=base_url?>uploads/images/<?=$product->imagen?>">
	<?php else: ?>
		<img src="assets/img/camiseta.png">
	<?php endif; ?>
	<h2><?=$product->nombre?></h2>
	<p><?=$product->precio?></p>
	<a href="#" class="button">Comprar</a>
</div>
<?php endwhile; ?>*/

	public static function statsCarrito(){
		$stats = array(
			'count' => 0,
			'total' => 0
		);
		
		if(isset($_SESSION['carrito'])) {
			$stats['count'] = count($_SESSION['carrito']);

			foreach ($_SESSION['carrito'] as $producto) {
				$stats['total'] += $producto['precio']*$producto['unidades'];
			}
		}
		
		return $stats;

	}


}