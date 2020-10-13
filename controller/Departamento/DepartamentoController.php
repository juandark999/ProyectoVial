<?php
    include_once '../model/Departamento/DepartamentoModel.php';

    class DepartamentoController{
        public function getCreate(){
            include_once '../view/Departamento/create.php';
        }
        public function postCreate(){

            $objeto=new DepartamentoModel();
            $depto=$_POST['depto'];
            $dep_codigo=$objeto->autoincrement("departamento","dep_codigo");
            $sql="INSERT INTO departamento VALUES($dep_codigo,'".$depto."')";

            $ejecutar=$objeto->insertar($sql);
            redirect(getUrl("Departamento","Departamento","index"));

        }
        public function index(){
            $objeto=new DepartamentoModel();
            $sql ="SELECT * FROM departamento";
            $departamentos=$objeto->consultar($sql);
            include_once '../view/Departamento/index.php';

        }
        public function getUpdate(){
            $dep_codigo=$_GET['dep_codigo'];
            $objeto=new DepartamentoModel();

            $sql="SELECT * FROM departamento WHERE dep_codigo=$dep_codigo";
            $departamentos=$objeto->consultar($sql);

            include_once '../view/Departamento/update.php';
        }
        public function postUpdate(){
            $objeto=new DepartamentoModel();

            $dep_codigo=$_POST['dep_codigo'];
            $depto=$_POST['depto'];
            $sql="UPDATE departamento SET dep_nombre='".$depto."' WHERE dep_codigo=$dep_codigo";
            $ejecutar=$objeto->editar($sql);
            redirect(getUrl("Departamento","Departamento","index"));
        }
        public function getDelete(){
            $dep_codigo=$_GET['dep_codigo'];
            $objeto=new DepartamentoModel();
            $sql="SELECT * FROM departamento WHERE dep_codigo=$dep_codigo";
            $departamentos=$objeto->consultar($sql);

            include_once '../view/Departamento/delete.php';
        }
        public function postDelete(){

            $objeto=new DepartamentoModel();

            $dep_codigo=$_POST['dep_codigo'];
            $depto=$_POST['depto'];
            $sql="DELETE FROM departamento WHERE dep_codigo='".$dep_codigo."' WHERE dep_codigo=$dep_codigo";
            $ejecutar=$objeto->eliminar($sql);
            redirect(getUrl("Departamento","Departamento","index"));

        }
    }
?>