<?php

$usuarioEjemplo = "usuario";
$passwordEjemplo = "usuario";

if ((isset($_POST['usuario']) && isset($_POST['password'])) && (!empty($_POST['usuario']) && !empty($_POST['password']))) {
	if ($_POST['usuario'] == $usuarioEjemplo && $_POST['password'] == $passwordEjemplo) {
		//En este caso iniciamos sesión
		session_start();
		$_SESSION['logueado'] = $_POST['usuario'];
		$_SESSION['usuario'] = $_POST['usuario'];

		if (isset($_POST['recordar']) && ($_POST['recordar'] == "on")) {
			//Si se selecciona recordar creamos las 2 cookies (usuario y contraseña)
			setcookie('usuario', $_POST['usuario'], time() + (7 * 24 * 60 * 60)); //Días x Horas x Minutos * Milisegundos
			setcookie('password', $_POST['password'], time() + (7 * 24 * 60 * 60)); //Días x Horas x Minutos * Milisegundos
			//Cookie para marcar recordar en caso que lo hayamos hecho anteriormente.
			setcookie('recordar', $_POST['recordar'], time() + (7 * 24 * 60 * 60));
		} else {
			//Si NO se seleccciona las eliminamos.
			if (isset($_COOKIE['usuario'])) {
				setcookie('usuario', "");
			}
			if (isset($_COOKIE['password'])) {
				setcookie('password', "");
			}
			if (isset($_COOKIE['recordar'])) {
				setcookie('recordar', "");
			}
		}
		//Para mantener abierta la sesión añadimos esto:
		if (isset($_POST['mantener']) && ($_POST['mantener'] == "on")) {
			// Creamos una cookie para la sesión si marcamos la opción
			setcookie('mantener', $_POST['usuario'], time() + (7 * 24 * 60 * 60));
		} else {
			// Borramos la cookie si no está marcada
			if (isset($_COOKIE['mantener'])) {
				setcookie('mantener', "");
			}
		}

		//Página a la que redireccionamos si se accede correctamente con nuestras credenciales
		header("Location: frminicio.php");
	} else {
		//En caso de datos incorrectos vamos a login y le pasamos por GET el error DATOS.
		header("Location: frmLogin.php?error=credenciales");
	}
}
require 'includes/header.php';
require 'includes/login.php';
require 'includes/footer.php';
?>