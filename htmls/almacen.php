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
                    if($filas[3]){
                    echo "<tr>";
                    for ($j=0;$j<3;$j++){
                        echo "<td>".$filas[$j]."</td>";
                    }
                    echo "<td>Editar</td>";
                        $link="almacen";
                    echo "<td><a href='eliminar.php?a=$i&b=$eliminar_almacen&c=$link'>Eliminar </a></td>";
                echo "</tr>";
                    }/*querido programador, cuando escribi este codigo, solo
                Dios y yo sabiamos como funcioanaba, pero ahora solo Dios sabe, asi que buena suerte manteniendo el codigo, agrege un +1 al contador al final para saber cuantas horas se han perdido en este  codigo Fabian Cudis 2014*/
                }
            ?>
        </table>
        <input type="button" value="Agregar">
    </section>
</body>
</html>
