<?php
include_once '../model/ciudad/CiudadModel.php';
class CiudadController{
    public function getCreate(){
        $objeto=new CiudadModel();

        $sql="SELECT * FROM departamento";
        $departamento=$objeto->consultar($sql);
        include_once '../view/Ciudad/create.php';
    }
    public function postCreate(){
        $objeto=new CiudadModel();

        $ciu_nombre=$_POST['ciu_nombre'];
        $dep_id=$_POST['dep_id'];
        $imagen=$_FILES['ciu_imagen']['name'];
        $ruta="img/$imagen";
        move_uploaded_file($_FILES['ciu_imagen']['tmp_name'],$ruta);
        $ciu_codigo=$objeto->autoincrement("ciudad","ciu_codigo");

        $sql="INSERT INTO ciudad VALUES(null,'".$ciu_nombre."',$dep_id,'".$ruta."')";
        $ejecutar=$objeto->insertar($sql);

        if($ejecutar){
            $_SESSION['result']="La ciudad $ciu_nombre se ha registrado correctamente";
        }

        redirect(getUrl("Ciudad","Ciudad","index"));
    }

    public function filtro(){
        $ciudad = $_POST['valor'];

        $objeto = new CiudadModel();

        $query = "SELECT c.ciu_codigo, c.ciu_nombre, d.dep_nombre, c.ciu_imagen FROM ciudad AS c, departamento AS d WHERE c.dep_codigo=d.dep_codigo AND (LOWER(c.ciu_nombre) LIKE LOWER('%$ciudad%') OR d.dep_nombre LIKE LOWER('%$ciudad%'))";

        $ciudades = $objeto->consult($query);

        include_once '../view/Ciudad/filtro.php';
    }

    public function index(){
        $objeto=new CiudadModel();

        $sql="SELECT c.ciu_codigo, c.ciu_nombre, d.dep_nombre FROM ciudad AS c, departamento AS d WHERE c.dep_codigo=d.dep_codigo";
        
        $ciudades=$objeto->consultar($sql);

        include_once '../view/Ciudad/index.php';
    }
}
?>