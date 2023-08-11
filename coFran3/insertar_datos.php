<?php

$nom_ape= $_POST ['nom_ape'];
$opinion= $_POST ['opinion'];

$conexion = mysqli_connect("localhost", "root","","empresa_aber")or exit ("no se puede conectar");

$insertar = "INSERT INTO opi_clientes VALUES (NULL, '$nom_ape', '$opinion')";
echo $insertar;
mysqli_query($conexion,$insertar)or exit ("no guarda");
echo "opinion enviada";
header ("ingop.php");

?>