<?php

session_start();
//Si logueado no existe volverá a la página de login y mostrará el error FUERA
if (!isset($_SESSION['logueado'])) {
	header("Location: frmLogin.php?error=privadas");
}

require 'includes/header.php';
require 'includes/inicio.php';
require 'includes/footer.php';
?>