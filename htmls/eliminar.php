<?php
require 'conectar.php';
$idx=$_GET['a'];
$condicion=$_GET['b'];
$link=$_GET['c'];
<<<<<<< HEAD
function eliminar ($conexion, $elim_query, $id, $link){
=======
function eliminar ($conexion, $elim_query, $id){
>>>>>>> 159fb0175266bb38aaa01f6c95bf3cd2d9889ed6
    mysqli_query($conexion, $elim_query.$id);
    echo "<script languaje=\"javascript\"> alert (\"Eliminado exitosamente\")</script>";

 header('Location:'.$link.'.php');
}
<<<<<<< HEAD
eliminar ($conexion, $condicion, ($idx+1), $link);
=======
eliminar ($conexion, $condicion, ($idx+1));
>>>>>>> 159fb0175266bb38aaa01f6c95bf3cd2d9889ed6


?>
