<?php
require_once('contacto.php');
require_once('Listar.php');
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    <title>Ejemplo de PHP y MySQL</title>
    <meta charset="UTF-8"> 
    </head>
        
    <body>
        <h1>Mostrar los elementos</h1>

        <?php

            $modelo = new Contacto();
            $contactos = $modelo->encontrarTodos();
            $listar = new ListarContactos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
        ?>

        <form name="frmUser" method="post" action="agregar.php">
            <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
                <tr class="tableheader">
                <td align="center" colspan="2">Ingresar Nuevo Producto</td>
                </tr>
                <tr class="tablerow">
                <td align="right">Clave</td>
                <td><input type="text" name="clave"></td>
                </tr>
                <tr class="tablerow">
                <td align="right">Producto</td>
                <td><input type="text" name="nombre"></td>
                </tr>
                <tr class="tablerow">
                <td align="right">Descripcion</td>
                <td><input type="text" name="descripcion"></td>
                </tr>
                <tr class="tableheader">
                <td align="right">Precio</td>
                <td><input type="text" name="precio"></td>
                </tr>
                <tr class="tableheader">
                <td align="center" colspan="2"><input type="submit" name="Agregar" value="Agregar"></td>
                </tr>
            </table>
        </form>
        
    </body>
</html>