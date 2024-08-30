<?php
//importar conexion
require 'includes/app.php';
$db = conectarDB();
//crear email y password
$email = "correo@correo.com";
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);
var_dump($passwordHash);

//query crear
$query = "INSERT INTO usuarios(email,password) VALUES ('${email}','${passwordHash}');";
echo $query;
//add a la db
mysqli_query($db, $query);
