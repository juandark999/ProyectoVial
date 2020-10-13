<?php
include_once '../lib/conf/connection.php';

class MasterModel extends Connection{
    public function insertar($sql){
        $respuesta=mysqli_query($this->getConnect(),$sql);
        return $respuesta;
    }


    public function consultar($sql){
        $respuesta=mysqli_query($this->getConnect(),$sql);
        return $respuesta;
    }

    public function validar($sql){
        $respuesta=mysqli_query($this->getConnect(),$sql);
        return $respuesta;
    }


    public function editar($sql){
        $respuesta=mysqli_query($this->getConnect(),$sql);
        return $respuesta;
    }


    public function eliminar($sql){
        $respuesta=mysqli_query($this->getConnect(),$sql);
        return $respuesta;
    }

    public function autoincrement($table,$field){
        $query = "SELECT MAX($field) FROM $table";
        $respuesta = $this->consult($query);
        //Trae la consulta y la convierte en un array convensional
        $contador = mysqli_fetch_row($respuesta);

        return $contador[0]+1;
    }
}
?>