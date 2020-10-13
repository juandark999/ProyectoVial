<?php
session_start();
//Funcion de redireccionamiento
function redirect( $url ){
    echo "<script type='text/javascript'>"
         ."window.location.href='$url'"
         ."</script>";
}

//Funcion para imprimir valores de un determinado parametro
function dd( $var ){
    echo "<prev>";
    die(print_r($var));//Finaliza la ejecucion
}

//Captura la url por metodo GET(1)
function getUrl( $module, $controller, $function, $parametros=false, $pagina=false ){
    
    if($pagina==false){
        $pagina="index";
    }
    
    $url = "$pagina.php?module=$module&controller=$controller&function=$function";//Recibe parametros por metodo GET
    
    //Se almacena en un array los parametros requeridos, por ejemplo departamento_id = 1 y ciudad_id = 2 etc...
    if ($parametros!=false) {
        foreach ($parametros as $key => $value) {
            $url.="&$key=$value";
        }
    }

    return $url;
}

//Resuelve los parametros de la URL(1)
function resolve(){
    $module = ucwords($_GET['module']);
    $controller = ucwords($_GET['controller']);//UsuarioController.php
    $function = ucwords($_GET['function']);
    // Modulo = carpeta
    // Controller = archivo
    // Funcion = metodo del controlador

    //La funcion is_dir valida si existe un determinado directorio en la ruta especificada
    if (is_dir("../controller/$module")) {
       
        //La funcion file_exists valida si determinado archivo existe en la ruta especificada
        if (file_exists("../controller/$module/".$controller."Controller.php")) {

            //Importacion del controlador
            include_once "../controller/$module/".$controller."Controller.php";
            //Asignacion al nombre de la clase
            $nameClass = $controller."Controller";
            //Objeto que instacia la clase
            $object = new $nameClass;

            //Funcion que valida si existe una funcion
            if (method_exists( $object, $function )) {
                //Se invoca la funcion
                $object->$function();

            } else {

                echo "La funcion especificada no Existe!";
                
            }

        } else {
            
            echo "El controlador especificado no Existe!";
            
        }
        
    } else {

        echo "El modulo especificado no Existe!";
        
    }
}
//modulo=carpeta
//controlador=archivo
//funcion=metodo del controlador
?>
