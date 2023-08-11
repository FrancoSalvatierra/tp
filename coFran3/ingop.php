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
            <li><a href="#">Dejanos aca tu opinión</a></li>
            <li><a href="./opiniones.php">Opiniones</a></li>
        </ul>
    </nav>
    <main class="insertar">
    <h1>Ingresa tu nombre y dejanos tu opinión</h1>
    <form action = "insertar_datos.php" method="POST">
        <div class= "nombre">
            <label >Nombre y apellido</label>
            <input type="text" maxlength="1000" name= "nom_ape" placeholder="Nombre y apellido" required>
        </div>
          
        <div class= "opinion">
            <label >Opinion</label>
            <input type="text" maxlength="1000"  name= "opinion" placeholder="Opinion" required>
        </div>
        <div>
            <button type="submit"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Enviar</button>
        </div>
    </main>
    <footer>
        <p>&copy; Derechos reservados para la empresa "Aber".</p>
    </footer>
</body>
</html>