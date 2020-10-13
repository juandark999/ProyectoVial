$(document).ready(function(){
    $(document).on("keyup","#campobuscar",function(){
        var valor=$("#campoBuscar").val();
        /*alert(valor);*/

        $.ajax({
            url:"../../controller/departamento/filtro.php",
            data: "depto="+valor,
            type: "GET",
            success: function(datos){
                $("tbody").html(datos);
            }
        });
    });
    $(document).on("keyup","#filtro",function(){

        var busqueda=$(this).val();

        $.ajax({
            url: "../../controller/ciudad/filtro.php",
            data: "busqueda="+busqueda,
            type: "POST",
                success: function(datos){
                    $("tbody").html(datos);
                }
        });
    });
});