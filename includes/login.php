<div class="centrar">	
	<div class="container cuerpo text-center">	
		<p><h2><img class="alineadoTextoImagen" src="images//user.png" width="50px"/> Login de usuario:</h2></p>
	</div>
	<div class="container">
		<form  action="frmLogin.php" method="POST">
			<!-- Rellenamos usuario con los valores de las cookies si existiesen -->	
			<label for="name">Usuario:
				<input type="text" name="usuario" class="form-control"
					   value="<?php
					   if (isset($_COOKIE['usuario'])) {
						   echo$_COOKIE['usuario'];
					   }
					   ?>"/> 
			</label>
			<br/>
			<!-- Rellenamos contraseña con los valores de las cookies si existiesen -->	
			<label for="password">Contraseña: 
				<input type="password" name="password" class="form-control" value="<?php
				if (isset($_COOKIE['password'])) {
					echo$_COOKIE['password'];
				}
				?>"/>            
			</label>
			<br/>
			
			<label><input type="checkbox" name="recordar" <?php
				if (isset($_COOKIE['recordar'])) {
					echo 'checked="true"';
				}
				?>"/>Recuérdame</label>
			<br/>
			
			<label><input type="checkbox" name="mantener"  <?php
				if (isset($_COOKIE['mantener'])) {
					echo 'checked="true"';
				}
				?>"/>Mantener iniciada la sesión de usuario</label>
			<br/> 
			
			<?php
			if (isset($_GET['error'])) {
				if ($_GET['error'] == "credenciales") {
					echo '<div class="alert alert-danger" style="margin-top:5px;">' . "Usuario o/y contraseña inválidos. Revise los datos. <br/>" . '</div>';
				} elseif ($_GET['error'] == "privadas") {
					echo '<div class="alert alert-danger" style="margin-top:5px;">' . "Es necesario loguearse para acceder al resto de páginas del sitio.<br/>" . '</div>';
				}
			}
			?> 
			<input type="submit" value="Enviar" name="submit" class="btn btn-success" />
		</form>
	</div>
</div>  
