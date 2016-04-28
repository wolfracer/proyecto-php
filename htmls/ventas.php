<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ventas</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/producto.js"></script>
</head>
<body>
    <section class="tabla">
        <table>
            <caption><h1>VENTAS</h1></caption>
            <tr>
                <th>Codigo de Venta</th>
                <th>Codigo de producto</th>
                <th>Nombre del producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Fecha de venta</th>
                <th><img src="editaricono.png" width="35" height="35"/></th>
            </tr>
            <?php
                require 'conectar.php';
                for($i=0;$i<cantidad_filas($ventas);$i++)
                {
                    $filas=consulta_db($ventas);
                    echo "<tr>";
                    for ($j=0;$j<5;$j++){
                        if ($j==2){
                           $nomb=venta_nombre($conexion, ($i+1), $name_item_query);
                            echo "<td>".$nomb[0]."</td>";
                        }
                        echo "<td>".$filas[$j]."</td>";
                    }
                    echo "<td>Editar</td>";

                echo "</tr>";
                }
            ?>
        </table>
        <input type="button" value="Agregar">
</section>
</body>
</html>
