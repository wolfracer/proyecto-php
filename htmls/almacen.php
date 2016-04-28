<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Almacen</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <section class="tabla">
        <table>
            <caption><h1>ALMACENES</h1></caption>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th><img src="editaricono.png" width="35" height="35"/></th>
                <th><img src="eliminar.png" width="35" height="35"/></th>
            </tr>
            <?php
                require 'conectar.php';
                for($i=0;$i<cantidad_filas($almacen);$i++)
                {
                    $filas=consulta_db($almacen);
                    echo "<tr>";
                    for ($j=0;$j<3;$j++){
                        echo "<td>".$filas[$j]."</td>";
                    }
                    echo "<td>Editar</td>";
                    echo "<td>Eliminar</td>";
                echo "</tr>";
                }
            ?>
        </table>
        <input type="button" value="Agregar">
    </section>
</body>
</html>
