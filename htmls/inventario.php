<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inventario</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <section class="tabla">
        <table>
            <caption><h1>INVENTARIO</h1></caption>
            <tr>
                <th>Codigo del producto</th>
                <th>Codigo del almacen</th>
                <th>Cantidad</th>
                <th><img src="editaricono.png" width="35" height="35"/></th>
                <th><img src="eliminar.png" width="35" height="35"/></th>
            </tr>
            <?php
                require 'conectar.php';
                for($i=0;$i<cantidad_filas($inventario);$i++)
                {
                    $filas=consulta_db($inventario);
                    if($filas[3]!=0){
                    echo "<tr>";
                    for ($j=1;$j<4;$j++){
                        echo "<td>".$filas[$j]."</td>";
                    }
                    echo "<td>Editar</td>";
                    $link="inventario";
                    echo "<td><a href='eliminar.php?a=$i&b=$eliminar_inventario&c=$link'>Eliminar </a></td>";
                echo "</tr>";
                    }
                }
            ?>
        </table>
        <input type="button" value="Agregar">
    </section>
</body>
</html>
