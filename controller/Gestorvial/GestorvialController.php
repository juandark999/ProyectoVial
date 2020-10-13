<?php

include_once '../model/gestorvial/gestorvialModel.php';

class gestorvialController{

    function getRegistrar(){

        include_once '../view/gestorvial/registrarTramo.php';

    }
    function postRegistrar(){
        $objeto = new getstorvialModel();
        $jerarquia=$_POST['jerarquia'];
        $ejevial=$_POST['ejevial'];
        //$calzada=$_POST['calzada'];
        $sentidoC=$_POST['sentidoC'];
        $elementoCom=$_POST['elementoCom'];
        $segmento=$_POST['segmento'];
        $codigo=$jerarquia.$ejevial.$sentidoC.$elementoCom.$segmento;
        // $id=$objeto->autoincrement("tramo","tra_id");
        $id=2;

        $sql="INSERT INTO tramo (tra_id, tra_codigo, tra_jerarquia, tra_ejevial, tra_calzada, tra_elementocom, tra_segmento) VALUES('".$id."','".$codigo."','".$jerarquia."','".$ejevial."','".$sentidoC."','".$elementoCom."','".$segmento."')";
        $ejecucion=$objeto->insertar($sql);

        if($ejecucion){
            $mensaje="Insercion Exitosa";
            echo "<script type='text/javascript'>"
                ."alert('$mensaje');"
                ."</script>";
            
            redirect(getUrl("Gestorvial","Gestorvial","getConsultar"));
        }else{
            $mensaje="Insercion Fallida";
            echo "<script type='text/javascript'>"
                ."alert('$mensaje');"
                ."</script>";
                redirect(getUrl("Gestorvial","Gestorvial","getRegistrar"));
        }
    }
    function getConsultar(){
        $objeto = new getstorvialModel();
        $sql="SELECT * FROM tramo ORDER BY tra_id";
        $tramos=$objeto->consultar($sql);
        if($tramos){
            $mensaje="Consulta Exitosa";
            echo "<script type='text/javascript'>"
                ."alert('$mensaje');"
                ."</script>";
                include_once '../view/gestorvial/consultarTramo.php';
                
        }else{
            $mensaje="Insercion Fallida";
            echo "<script type='text/javascript'>"
                ."alert('$mensaje');"
                ."</script>";
                redirect(getUrl("Usuario","Usuario","index"));
        }
        
    }
    function getUpdate(){
        $objeto = new getstorvialModel();
        $id=$_GET['tra_id'];
        $sql="SELECT * FROM tramo WHERE tra_id='".$id."'";
        $tramo=$objeto->consultar($sql);
        if($tramo){
            
            echo "Exito al consultar";
            include_once '../view/gestorvial/editarTramo.php';
        }else{
            echo "Error en la consulta";
            include_once '../view/gestorvial/consultarTramo.php';
        }
    }
    function postUpdate(){
        $objeto = new getstorvialModel();
        $jerarquia=$_POST['jerarquia'];
        $ejevial=$_POST['ejevial'];
        //$calzada=$_POST['calzada'];
        $sentidoC=$_POST['sentidoC'];
        $elementoCom=$_POST['elementoCom'];
        $segmento=$_POST['segmento'];
        $codigo=$jerarquia.$ejevial.$sentidoC.$elementoCom.$segmento;
        $id=$_POST['id'];

        $sql="UPDATE tramo SET tra_codigo='".$codigo."', tra_jerarquia='".$jerarquia."', tra_ejevial='".$ejevial."', tra_calzada='".$sentidoC."', tra_elementocom='".$elementoCom."' WHERE tra_id=$id";
        $ejecutar = $objeto->editar($sql);
        if($ejecutar){
            $mensaje="Exito al Editar";
            echo "<script type='text/javascript'>"
                ."alert('$mensaje');"
                ."</script>";
            redirect(getUrl("gestorvial","gestorvial","getConsultar"));
        }else{
            echo "Error al Editar";
            redirect(getUrl("gestorvial","gestorvial","getUpdate"));
        }
    }
    function validarCalzada(){

        $calzada=$_POST['calzada'];

        if($calzada==1){
           echo 
                "<label>Sentido de Circulacion</label>".
                "<select name='sentidoC' id='sentidoC' class='form-control'>".
                "<option value='' selected>Seleccione un sentido de Circulacion</option>".
                "<option value='0'>Calzada Unica</option>".
                "</select>".
                "<small class='text-danger' id='v_sentido'></small>";
        }else if($calzada==2){
            echo 
            "<label>Sentido de Circulacion</label>".
            "<select name='sentidoC' id='sentidoC' class='form-control'>".
            "<option value='' selected>Seleccione un sentido de Circulacion</option>".
            "<option value='2'>Izquierda</option>".
            "<option value='3'>Derecha</option>".
            "</select>".
            "<small class='text-danger' id='v_sentido'></small>";
        }else if($calzada==3){
            echo 
            "<label>Sentido de Circulacion</label>".
            "<select name='sentidoC' id='sentidoC' class='form-control'>".
            "<option value='' selected>Seleccione un sentido de Circulacion</option>".
            "<option value='1'>Exterior Izquierda</option>".
            "<option value='2'>Interior Izquierda</option>".
            "<option value='3'>Interior Derecha</option>".
            "<option value='4'>Exterior Derecha</option>".
            "</select>".
            "<small class='text-danger' id='v_sentido'></small>";
        }
    }

}
