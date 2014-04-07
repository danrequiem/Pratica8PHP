<?php
class ListarContactos
{
    public $contactos;

    public function generaTabla()
    {
        echo '<table border=1>';
             echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>Clave</th>';
                echo '<th>Nombre</th>';
                echo '<th>Descripcion</th>';
                echo '<th>Precios</th>';
              
            echo '</tr>';
            foreach($this->contactos as $contacto){
                echo '<tr>';
                    echo '<td>'.$contacto['idProducto']. '</td>';
                    echo '<td>'.$contacto['clave'].'</td>';
                    echo '<td>'.$contacto['nombre'].'</td>';
                    echo '<td>'.$contacto['descripcion'].'</td>';
                    echo '<td>'.$contacto['precio'].'</td>';
                echo '</tr>';
            }
        echo "</table>";
    }
}

?>