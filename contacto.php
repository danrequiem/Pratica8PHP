<?php
require_once('conexion.php');

class Contacto
{

	public function encontrarTodos()
	{
		try
		{

		$resultado = array();
		$conexion = new Conexion();

		 if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "SELECT * FROM Producto";
            if ($result = $conexion->mysqli->query($sql))
            {
                if ($result->num_rows > 0) 
                {
                     while($row = $result->fetch_assoc())
                     {
                         $resultado[] = $row;
                     }
                }
            }
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exceptio $e)
       	{
       		return array();

       	}

	}
     public function nuevo($clave,$nombre,$descripcion,$precio)
    {
        try
        {
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "INSERT INTO `Producto` ".
                "(`clave`, `nombre`, `descripcion`, `precio`)".
                "VALUES ".
                "('$clave', '$nombre', '$descripcion', '$precio');";
            $resultado = $conexion->mysqli->query($sql);
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return false;
        } 
    }

}
?>