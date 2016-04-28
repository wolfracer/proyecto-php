
<?php
$host="localhost";
$nombre="inventario";
$user="root";
$pass="";
//variables de querys

$product_query="SELECT * FROM producto";
$almacen_query="SELECT * FROM almacen";
$ventas_query="SELECT * FROM ventas";
$inventario_query="SELECT * FROM inventario";
$name_item_query="SELECT nombre FROM producto WHERE id_producto=";
$precio_query="SELECT precio FROM producto WHERE id_producto=";
$eliminar_query="UPDATE producto SET existencia=0 WHERE id_producto=";
$conexion=mysqli_connect($host, $user, $pass, $nombre) OR DIE("No ha sido posible conectar a la tabla");
if (mysqli_connect_errno()){
    echo "
                <script language=’JavaScript’>
                alert(‘Error de conexion con BD’);
                </script>";
    exit();
}
mysqli_select_db($conexion, $nombre) OR DIE ("No se ha encontrado la BD");
mysqli_set_charset ($conexion, "utf-8");
   $producto=mysqli_query($conexion, $product_query);
   $almacen=mysqli_query($conexion, $almacen_query);
   $ventas=mysqli_query($conexion, $ventas_query);
   $inventario=mysqli_query($conexion, $inventario_query);

function consulta_db ($cherry) {
    global $filap;
    $filap=mysqli_fetch_row($cherry);
    return $filap;
}

function cantidad_filas ($query){
    global $cant_registro;

    $cant_registro=mysqli_num_rows($query);
    return $cant_registro;
}

function venta_nombre ($conexion, $id, $name_item) {

    global $name;
    $name=mysqli_query($conexion, $name_item.$id);
    $filan=mysqli_fetch_row($name);
    return $filan;

}





?>
