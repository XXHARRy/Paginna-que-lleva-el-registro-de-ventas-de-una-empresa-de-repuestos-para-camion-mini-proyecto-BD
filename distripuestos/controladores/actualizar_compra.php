<script src="../js/sweetalert2@10.js"></script>
.

<?php
//Paso 1: llamar la libreria de conexion a la BD
require "../config/conexion.php";

//Paso 2: capturar variables
$nombre = $_POST["nombre"];
$categoria_producto = $_POST["categoria_producto"];
$precio_producto = $_POST["precio_producto"];
$cantidad_productos = $_POST["cantidad_productos"];
$fecha_de_compra  = $_POST["fecha_compra"];
$subtotal = $precio_producto * $cantidad_productos;
$iva = $subtotal * 0.19;
$total = $subtotal + $iva;


//paso 3: Armas el sql que hicimos en phpmyadmin
$sql_actualizar = "UPDATE registro_venta SET categoria_producto='".$categoria_producto."', precio_producto='".$precio_producto."', cantidad_productos='".$cantidad_productos."', subtotal='".$subtotal."',iva='".$iva."', total='".$total."', fecha_de_compra='".$fecha_de_compra."' WHERE nombre='".$nombre."'";
//echo $sql_insertar

echo $sql_actualizar;

if ($dbh->query($sql_actualizar)) 
{
    echo "<script>
    Swal.fire({
      title: 'COMPRA ACTUALIZADA SATISFACTORIAMENTE',
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
