<?php
require 'conectar.php';
$idx=$_GET['a'];
function eliminar ($conexion, $elim_query, $id){
    mysqli_query($conexion, $elim_query.$id);
    echo "<script languaje=\"javascript\"> alert (\"Eliminado exitosamente\")</script>";

 header('Location: producto.php');
}
eliminar ($conexion, $eliminar_query, ($idx+1));


?>
