<?php
require_once 'models/usuario.php';

class usuarioController{

	public function index(){
		echo "Controlador usuarios, acción Index";
	}

	public function registro(){
		require_once 'views/usuario/registro.php';
	}


	public function save(){//completar validacion con ayuda del proyecto anterior

		if (isset($_POST)){
			
			$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
			$apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
			$email = isset($_POST['email']) ? $_POST['email'] : false;
			$password = isset($_POST['password']) ? $_POST['password'] : false;

			if ($nombre && $apellido && $email && $password){
				$usuario = new Usuario();
				$usuario->setNombre($nombre);
				$usuario->setApellido($apellido);
				$usuario->setEmail($email);
				$usuario->setPassword($password);

				$save = $usuario->save();
				if($save){
					$_SESSION['register'] = "complete";
				}else{
					$_SESSION['register'] = "failed";
				}
			}else{
				$_SESSION['register'] = "failed";
			}
		}else{
			$_SESSION['register'] = "failed";
		}
		header("Location:".base_url.'usuario/registro');
	}


	public function login(){

		if (isset($_POST)) {
			//Identificar al usuario
			//Consulta a la base de datos
			$usuario = new Usuario;
			$usuario->setEmail($_POST['email']);
			$usuario->setPassword($_POST['password']);

			//Crear una sesión
			$identity = $usuario->login();

			if ($identity && is_object($identity)) {
				$_SESSION['identity'] = $identity;

				if ($identity->rol == 'admin') {
					$_SESSION['admin'] = true;
				}
			}else{
				$_SESSION['error_login'] = 'Identificación fallida';
			}
			
		}
			header('Location:'.base_url);
	}


	public function logout(){

		if (isset($_SESSION['identity'])) {
			unset($_SESSION['identity']);
		}

		if (isset($_SESSION['admin'])) {
			unset($_SESSION['admin']);
		}

		header("Location:".base_url);

	}
}
//Fin de la clase usuarioController