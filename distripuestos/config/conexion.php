<?php

$dataBase = "mysql:dbname=distripuestos;host=127.0.0.1";
$user = "root";
$pass = "";

try {

    $dbh = new PDO($dataBase, $user, $pass);

}

catch (Exception $e) {

    die("Error Al Conectar Con La Base De Datos");

}

?>