<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Producto</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/producto.js"></script>
</head>
<body>
    <section class="tabla">
        <table>
            <caption><h1>PRODUCTOS</h1></caption>
            <tr>
                <th>Código del producto</th>
                <th>Nombre</th> <th>Precio</th>
                <th><img src="editaricono.png" width="35" height="35"/></th>
                <th><img src="eliminar.png" width="35" height="35"/></th>
            </tr>
            <?php
                require 'conectar.php';
                for($i=0;$i<cantidad_filas($producto);$i++)
                {
                    $filas=consulta_db($producto);
                    if ($filas[3]){


                    echo "<tr>";
                    for ($j=0;$j<3;$j++){
                        echo "<td>".$filas[$j]."</td>";
                    }
                    echo "<td>Editar</td>";
                    echo "<td><a href='eliminar.php?a=$i'>Eliminar </a></td>";
                echo "</tr>";
                   }
                }
            ?>
        </table>
        <input type="button" value="Agregar">
    </section>
</body>
</html>
