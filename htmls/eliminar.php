<?php
require 'conectar.php';
$idx=$_GET['a'];
$condicion=$_GET['b'];
$link=$_GET['c'];
function eliminar ($conexion, $elim_query, $id){
    mysqli_query($conexion, $elim_query.$id);
    echo "<script languaje=\"javascript\"> alert (\"Eliminado exitosamente\")</script>";

 header('Location:'.$link.'.php');
}
eliminar ($conexion, $condicion, ($idx+1));


?>
