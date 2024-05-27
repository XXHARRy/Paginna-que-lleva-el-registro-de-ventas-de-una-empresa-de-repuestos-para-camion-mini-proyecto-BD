

<?php
//Paso 1: Importar la libreria de la BD
require "config/conexion.php";

//Paso 2: Capturando variables

//Paso 3: Armo la sentencia sql que necesite
$sql =  "SELECT nombre, fecha_ingreso,categoria_producto, precio_producto, cantidad_productos, subtotal, iva, total, fecha_de_compra 
FROM registro_venta 
WHERE 1";

//Paso 4, recorrer el arreglo
foreach($dbh->query($sql) as $row)
{
     print "<tr>
	<td>".$row["nombre"]."</td>
	<td>".$row["fecha_ingreso"]."</td>
  <td>".$row["categoria_producto"]."</td>
  <td>".$row["precio_producto"]."</td>
  <td>".$row["cantidad_productos"]."</td>
	<td>".$row["subtotal"]."</td>
  <td>".$row["iva"]."</td>
  <td>".$row["total"]."</td>
  <td>".$row["fecha_de_compra"]."</td>
	</tr>  
     ";               
}
?>