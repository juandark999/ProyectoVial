<?php

include_once '../model/acceso/accesoModel.php';

class accesoController{

    public function getLogin(){
        include_once '../view/acceso/login.php';
    }
    public function postLogin(){

        $objeto = new accesoModel();
        $nickname=$_POST['nickname'];
        $clave=$_POST['clave'];
        $sql="SELECT usu_rol, usu_id, usu_nickname, usu_clave, usu_nombre FROM usuarios WHERE usu_clave='".$clave."' AND (usu_nickname='".$nickname."')";
        $ejecutar=$objeto->validar($sql);
            echo $sql;
        if(mysqli_num_rows($ejecutar)>0){
            foreach($ejecutar as $resultado){
    
                $_SESSION['id']=$resultado['usu_id'];
               // $_SESSION['nombre']=$resultado['usu_nombre'];
                $_SESSION['nombre']=$resultado['usu_nombre'];
                $_SESSION['rol']=$resultado['usu_rol'];
            }

            $mensaje="BIENVENIDO ".$_SESSION['nombre'];
            echo "<script type='text/javascript'>"
                ."alert('$mensaje');"
                ."</script>";

                

                redirect(getUrl("acceso","acceso","index"));
        }else{
            $mensaje="El usuario es incorrecto";
            echo "<script type='text/javascript'>"
                ."alert('$mensaje');"
                ."</script>";
                redirect(getUrl("acceso","acceso","getLogin"));
        }
        

    }
    public function index(){
            
        include_once '../view/dlogin/index.php';

    }
}

?>