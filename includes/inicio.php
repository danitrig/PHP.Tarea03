<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="includes/logout.php">Cerrar sesión</a>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="frminicio.php">Inicio<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="frmInformacion.php">Información</a>
			</li>
		</ul>
	</div>
</nav>
<div class="centrar">	
	<div class="container cuerpo text-center">	
		<h1><strong>PÁGINA DE INICIO</strong></h1>  
		<p><h2><img class="alineadoTextoImagen" src="images//user.png" width="50px"/>Bienvenido a Mi Sitio <?php echo "'" . $_SESSION['usuario'] . "'" ; ?> </h2></p>
	</div>
</div>  