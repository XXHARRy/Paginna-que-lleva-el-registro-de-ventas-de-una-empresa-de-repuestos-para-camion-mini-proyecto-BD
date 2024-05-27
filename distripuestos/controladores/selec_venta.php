<?php

//paso 1
include "config/conexion.php";

//paso 2
$sql = "SELECT cod, categoria_producto 
FROM categoria_vent 
WHERE 1";

//Paso 3
foreach($dbh->query($sql) as $row)
{
    print "
    <option value='".$row['cod']."'>".$row['categoria_producto']."</option>
    ";
}
