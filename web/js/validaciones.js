$(document).ready(function(){
    $(document).on("change","#correo",function(){
        
        let url=$(this).attr('data-url');
        let dato=$(this).val();
            
        $.ajax({
            url:url,
            data: "correo="+dato,
            type: "POST",
                success: function(datos){
                    $("#v_correo").html(datos);
                }
        });
    });
    $(document).on("change","#calzada",function(){
        
        let url=$(this).attr('data-url');
        let dato=$(this).val();
            
        $.ajax({
            url:url,
            data: "calzada="+dato,
            type: "POST",
                success: function(datos){
                    $("#sentidoCirculacion").html(datos);
                }
        });
    });
});


function validar(){
    let usuario=document.getElementById("nickname").value;
    let nombre=document.getElementById("nombre").value;
    let correo=document.getElementById("correo").value;
    let celular=document.getElementById("celular").value;
    let clave=document.getElementById("clave").value;
    let rol=document.getElementById("rol").value;
    let formulario=document.getElementById("myform");
    let contador=0;
    let lista = [usuario, nombre, correo, celular, clave, rol];
    let etiqueta = ["v_nickname", "v_nombre", "v_correo", "v_celular", "v_clave", "v_rol"];

    for (let i = 0; i < lista.length; i++) {
        
        if(lista[i]==''){
            document.getElementById(etiqueta[i]).innerHTML = "El campo no puede estar vacio";
            contador++;
        }
        
    }
            if(contador>0){
                return false;
            }else{ 
                return true;
            }

}


function validarT(){
    let jerarquia=document.getElementById("jerarquia").value;
    let ejevial=document.getElementById("ejevial").value;
    let calzada=document.getElementById("calzada").value;
    let sentidoC=document.getElementById("sentidoC").value;
    let elementoCom=document.getElementById("elementoCom").value;
    let segmento=document.getElementById("segmento").value;
    let formulario=document.getElementById("myformT");
    let contador=0;
    let lista = [jerarquia, ejevial, calzada, sentidoC, elementoCom, segmento];
    let etiqueta = ["v_jerarquia", "v_eje", "v_calzada", "v_sentido", "v_elemento", "v_segmento"];

    for (let i = 0; i < lista.length; i++) {
        
        if(lista[i]==''){
            document.getElementById(etiqueta[i]).innerHTML = "El campo no puede estar vacio";
            contador++;
        }
        
    }
            if(contador>0){
                return false;
            }else{ 
                return true;
            }

}


