<?php

include_once "../model/usuario/usuarioModel.php";

class BarrioController {

    public function getRegistrar(){
        include_once "../view/barrio/Registrar.php";
    } 
    public function postRegistrar(){
      $objeto=new usuarioModel();
      $CodigoBarrio=$_POST['BarrioId'];
      $NameBarrio=$_POST['BarrioName'];
       
      $sql="INSERT INTO barrio VALUES('".$CodigoBarrio."','".$NameBarrio."')";
      $sql2=$objeto->insertar($sql);
      if($sql2)
        {
           $_SESSION['Mensaje']="El Barrio $NameBarrio Se ha registrado con exito";
           redirect(getUrl("Barrio","Barrio","getRegistrar"));
        }
    }
    public function getConsultar(){
        $objeto=new usuarioModel();
        $sql ="SELECT * FROM barrio";
        $Barrio=$objeto->consultar($sql);
        include_once '../view/Barrio/Consultar.php';

    }
    public function postConsultar(){
        $objeto=new usuarioModel();
        $sql ="SELECT * FROM barrio";
        $Barrio=$objeto->consultar($sql);
        redirect(getUrl("Barrio","Barrio","getConsultar"));
    }
    public function getEliminar(){
        $barcodigo=$_GET['bar_codigo'];
        $objeto=new usuarioModel();
        $sql="SELECT * FROM barrio WHERE bar_codigo='".$barcodigo."'";
        $Barrio=$objeto->consultar($sql);

        include_once '../view/Barrio/Eliminar.php';
    }
    public function postEliminar(){

        $objeto=new usuarioModel();

        $barcodigo=$_POST['Barcodigo'];
        $barname=$_POST['Barname'];
        $sql="DELETE FROM barrio WHERE bar_codigo='".$barcodigo."'";
        $ejecutar=$objeto->eliminar($sql);
        redirect(getUrl("Barrio","Barrio","postConsultar"));

    }
    public function filtro(){
        $barrio = $_POST['valor'];

        $objeto = new usuarioModel();

        $query = "SELECT c.bar_codigo, c.bar_nombre FROM barrio AS c, barrio AS d WHERE c.bar_codigo=d.bar_codigo AND (LOWER(c.bar_nombre) LIKE LOWER('%$barrio%') OR d.bar_nombre LIKE LOWER('%$barrio%'))";

        $Barrio = $objeto->consult($query);

        include_once '../view/Barrio/filtro.php';
    }

     

}

?>