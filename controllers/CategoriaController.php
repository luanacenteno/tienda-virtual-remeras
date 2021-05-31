<?php
require_once 'models/categoria.php';
require_once 'models/producto.php';


class categoriaController{

	public function index(){
		Utils::isAdmin();
		$categoria = new Categoria();
		$categorias = $categoria->getAll();

		require_once 'views/categoria/index.php';
	}

	public function ver(){
		if (isset($_GET['id'])){
		$id = ($_GET['id']);

			//CONSEGUIR CATEGORIAS
			//Instancio objeto Categoria del modelo categoria
			$categoria = new Categoria();
			$categoria->setId($id);
			$categoria = $categoria->getOne();

			//CONSEGUIR PRODUCTOS
			$producto = new Producto();
			$producto->setCategoria_id($id);
			$productos = $producto->getAllCategory();

		}

		require_once 'views/categoria/ver.php';
	}

	public function crear(){
		Utils::isAdmin();
		require_once 'views/categoria/crear.php';
	}

	public function save(){
		Utils::isAdmin();

		//Compruebo si el dato me llega por post
		if (isset($_POST) && isset($_POST['nombre'])) { 


			$categoria = new Categoria();
			//Seteo el nombre con lo que me llega por post
			$categoria->setNombre($_POST['nombre']);
			//Guardo la categoria en la base de datos
			$categoria->save(); 
		}

		header('Location:'.base_url."categoria/index");
	}
	
}