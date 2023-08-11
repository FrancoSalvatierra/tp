<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa Aber</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <h1>Empresa Aber</h1>
    </header>
    <nav>
        <ul>
            <li><a href="./ingop.php">Dejanos aca tu opinión</a></li>
            <li><a href="#">Opiniones</a></li>
        </ul>
    </nav>
    <main>
    <h1>Estas son las opiniones de nuestros clientes</h1>
    <?php
			include ("conexion.php");
			$datos_bd = mysqli_connect("localhost","root","","empresa_aber") or exit ("No se puede conectar con la Base de datos");
			$consulta= mysqli_query($datos_bd,"SELECT  * FROM opi_clientes");
			while ($lista_consulta= mysqli_fetch_assoc($consulta) ){
					
				?>
				<div class="consultas">
					<ul>
					   <li><?php echo $lista_consulta["opinion"];?></li>
				    </ul>
			    </div>
				<?php
					}
		?>
    </main>
    <footer>
        <p>&copy; Derechos reservados para la empresa "Aber".</p>
    </footer>
</body>
</html>