<?php

$servidor = "localhost";
$usuario = "root";
$contraseña = "3736";
$db = "garciaga";

try
{
    $mbd = new PDO("mysql:host=$servidor;dbname=$db", $usuario, $contraseña);
}
catch(PDOException $e){
    echo "Ha ocurrido un error al conectar a " + $db;
    echo $error->getMessage();
    exit();
}

$cadenaConsulta = "SELECT * FROM Restaurantes";
$consulta = $mbd->prepare($cadenaConsulta);
$consulta->execute();

while($registro = $consulta->fetch()){
    echo $registro['id_restaurante'].'//'.
         $registro['Nombre_restaurante'].'//'.
         $registro['Calificacion'].'//'.
         $registro['Nombre_ciudad'].'<br>';
}
$consulta->closeCursor();
?>