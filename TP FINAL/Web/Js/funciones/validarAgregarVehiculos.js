var expr = /^[a-zA-Z]*$/;
var expr1 = /^[0-9]*$/;

$(document).ready(function () {

    $("#boton").click(function (){

        var modelo = $("#modelo").val();
        var marca = $("#marca").val();
        var carga = $("#carga").val();

         //Verifica que no este vacío y que sean letras
        if(modelo == "" || !expr.test(modelo)){
            $("#mensaje1").fadeIn("slow"); //Muestra mensaje de error
            return false;                 
        }
        else{
            $("#mensaje1").fadeOut();

            if(marca == "" || !expr.test(marca)){
                $("#mensaje2").fadeIn("slow");
                return false;
                }
                else{
                    $("#mensaje2").fadeOut();

                    if(carga == "" || !expr1.test(carga)){
                            $("#mensaje3").fadeIn("slow");
                            return false;
                         }
                        else{
                            $("#mensaje3").fadeOut();
                            }  
                }  
            }
    
    });
    
});
