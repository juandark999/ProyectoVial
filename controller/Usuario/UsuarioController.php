<?php

    include_once '../model/usuario/usuarioModel.php';

    class usuarioController{
       
        public function getCreate(){
            
            //   if(isset($_SESSION['rol'])){
            //       echo "Existe la variable de session";
            //   } else{
            //       echo "no existe la variable de session";
            //   }
            $objeto = new usuarioModel();
            $sql="SELECT * FROM rolusu ORDER BY rol_id";
            $rol=$objeto->consultar($sql);

            include_once '../view/usuario/create.php';
        }      
        public function postCreate(){

            $objeto = new usuarioModel();           
                
                $rol=$_POST['usu_rol'];         
                $nombre=$_POST['nombre'];         
                $correo=$_POST['correo'];         
                $celular=$_POST['celular'];
                $nickname=$_POST['nickname'];
                $clave=$_POST['clave'];

                // echo $rol;
                // echo $nombre; 
                // echo $correo; 
                // echo $celular; 
                // echo $nickname; 
                // echo $clave;  
            
            $sql="INSERT INTO usuarios (usu_nickname, usu_clave, usu_nombre, usu_cel, usu_correo, usu_rol) VALUES('".$nickname."','".$clave."','".$nombre."','".$celular."','".$correo."','".$rol."')";
           
           $ejecutar=$objeto->insertar($sql);

           if(!$ejecutar){

            echo "Insercion fallida";
            

           }else{
            
            $mensaje="Insercion Exitosa";
            echo "<script type='text/javascript'>"
                ."alert('$mensaje');"
                ."</script>";
            
            redirect(getUrl("Usuario","Usuario","getConsult"));

           }
        }
        public function index(){
            
            include_once '../web/index.php';

        }
        public function getConsult(){
            $objeto = new usuarioModel();
            $sql="SELECT * FROM usuarios ORDER BY usu_id";
            $usuarios=$objeto->consultar($sql);
            if($usuarios){
                echo "consulta exitosa";
            }else{
                echo "error en la consulta";
            }
            include_once '../view/usuario/consult.php';
        }
        public function getUpdate(){
            $objeto = new usuarioModel();
            $id=$_GET['usu_id'];
            $sql="SELECT * FROM usuarios  WHERE usu_id='".$id."'";
            $sql2="SELECT * FROM rolusu ORDER BY rol_id";
            $usuario=$objeto->consultar($sql);
            $rol=$objeto->consultar($sql2);
            if($usuario){
                echo "consulta exitosa";
                include_once '../view/usuario/editar.php';
            }else{
                echo "error en la consulta";
                include_once '../view/usuario/consult.php';
            }


        }
        public function postUpdate(){
            $objeto = new usuarioModel();
                $rol=$_POST['usu_rol'];           
                $nombre=$_POST['nombre'];         
                $correo=$_POST['correo'];         
                $celular=$_POST['celular'];
                $nickname=$_POST['nickname'];
                $clave=$_POST['clave'];
                $id=$_POST['id'];

                $sql="UPDATE usuarios SET usu_nickname='".$nickname."', usu_clave='".$clave."',usu_nombre='".$nombre."',usu_cel='".$celular."',usu_rol='".$rol."' WHERE usu_id=$id";
                $ejecutar = $objeto->editar($sql);
                if($ejecutar){
                    $mensaje="Exito al Editar";
                    echo "<script type='text/javascript'>"
                        ."alert('$mensaje');"
                        ."</script>";
                    redirect(getUrl("usuario","usuario","getConsult"));
                }else{
                    echo "Error al Editar";
                    redirect(getUrl("usuario","usuario","getUpdate"));
                }

        }
        public function getDelete(){
            $objeto = new usuarioModel();
            $id=$_GET['usu_id'];
            $sql = "SELECT * FROM usuarios WHERE usu_id='".$id."'";
            $usuario = $objeto->consultar($sql);
            if($usuario){
                echo "consulta exitosa";
                include_once '../view/usuario/delete.php';
            }else{
                echo "error en la consulta";
                include_once '../view/usuario/consult.php';
            }
        }
        public function postDelete(){
            $objeto = new usuarioModel();
            $id=$_POST['id'];
            $sql ="DELETE FROM usuarios WHERE usu_id='".$id."'";
            $ejecutar = $objeto->eliminar($sql);
            if($ejecutar){
                $mensaje="Usuario Eliminado";
            echo "<script type='text/javascript'>"
                ."alert('$mensaje');"
                ."</script>";
                redirect(getUrl("Usuario","Usuario","getConsult"));
            }else{
                $mensaje="Error al Eliminar Usuario";
            echo "<script type='text/javascript'>"
                ."alert('$mensaje');"
                ."</script>";
                redirect(getUrl("Usuario","Usuario","getConsult"));
            }
        }
        public function validaCorreo(){
            $objeto = new usuarioModel();
            $correo=$_POST['correo'];
            $sql="SELECT * FROM usuarios WHERE usu_correo='".$correo."'";
            $ejecutar = $objeto->consultar($sql);

            if(mysqli_num_rows($ejecutar)>0){
                echo "El correo ya se encuentra registrado";
            }else{
                echo "El correo es valido";
            }
        }
    }
