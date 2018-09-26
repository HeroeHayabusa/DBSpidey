		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
			<?php 
				if($_SESSION['rol'] == 1){
			 ?>
				<li class="principal">

					<a href="#">Usuarios</a>
					<ul>
						<li><a href="registro_usuario.php">Nuevo Usuario</a></li>
						<li><a href="lista_usuarios.php">Lista de Usuarios</a></li>
					</ul>
				</li>
			<?php } ?>
				<li class="principal">
					<a href="#">Comics</a>
					<ul>
						<li><a href="#">Nuevo Comic</a></li>
						<li><a href="#">Lista de Comics</a></li>
					</ul>
				</li>
				<li class="principal">
					<a href="#">Peliculas</a>
					<ul>
						<li><a href="#">Nueva Pelicula</a></li>
						<li><a href="#">Lista de Peliculas</a></li>
					</ul>
				</li>
				<li class="principal">
					<a href="#">Series</a>
					<ul>
						<li><a href="#">Nueva Serie</a></li>
						<li><a href="#">Lista de Series</a></li>
					</ul>
									<li class="principal">
					<a href="#">Productos</a>
					<ul>
						<li><a href="#">Nuevo Producto</a></li>
						<li><a href="#">Lista de Productos</a></li>
					</ul>
				</li>
				</li>
			</ul>
		</nav>