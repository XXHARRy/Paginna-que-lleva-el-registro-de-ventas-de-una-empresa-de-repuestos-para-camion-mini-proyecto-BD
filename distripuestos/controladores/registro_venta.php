<script src="../js/sweetalert2@10.js"></script>
.

<?php

//paso 1: llamar la libreria de conexion a la BD 

require "../config/conexion.php";

//paso2: capturar variables

$nombre = $_POST["nombre"];
$categoria_producto = $_POST["categoria_producto"];
$precio_producto = $_POST["precio_producto"];
$cantidad_productos = $_POST["cantidad_productos"];
$subtotal = $precio_producto * $cantidad_productos;
$iva = $subtotal * 0.19;
$total = $subtotal + $iva;
$fecha_de_compra  = $_POST["fecha_de_compra"];
//paso 3: arma el sql que hicimos en phpmyadmin

$sql_insertar ="INSERT INTO registro_venta(nombre,categoria_producto,fecha_ingreso,precio_producto,cantidad_productos,subtotal,iva,total,fecha_de_compra) VALUES ('".$nombre."','".$categoria_producto."',now(),'".$precio_producto."','".$cantidad_productos."','".$subtotal."','".$iva."','".$total."','".$fecha_de_compra."')";
 echo $sql_insertar;
if ($dbh->query($sql_insertar)) 
{
    echo "<script>
    Swal.fire({
      title: 'COMPRA SATISFACTORIA',
      icon: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
        // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
        window.location.href = '../index.html';
      }
    });
  </script>";
}else{
    echo "<script>
            Swal.fire({
              title: 'Error eliminando',
              icon: 'error',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
            // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = '../index.html';
              }
            });
          </script>";
}

?> 