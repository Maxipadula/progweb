var expr = /^[a-zA-Z]*$/;
var expr1 = /^[0-9]*$/;
var expr2 = /^((([0][1-9]|[12][\d])|[3][01])[-\/]([0][13578]|[1][02])[-\/][1-9]\d\d\d)|((([0][1-9]|[12][\d])|[3][0])[-\/]([0][13456789]|[1][012])[-\/][1-9]\d\d\d)|(([0][1-9]|[12][\d])[-\/][0][2][-\/][1-9]\d([02468][048]|[13579][26]))|(([0][1-9]|[12][0-8])[-\/][0][2][-\/][1-9]\d\d\d)$/

$(document).ready(function () {

    $("#boton").click(function (){

        var user = $("#user").val();
        var name = $("#name").val();
        var pass = $("#pass").val();
        var fnac = $("#fnac").val();
        var numDoc = $("#numDoc").val();

         //Verifica que no este vacío y que sean letras
        if(user == "" || !expr.test(user)){
            $("#mensaje1").fadeIn("slow"); //Muestra mensaje de error
            return false;                 
        }
        else{
            $("#mensaje1").fadeOut();

            if(name == "" || !expr.test(name)){
                $("#mensaje2").fadeIn("slow");
                return false;
            }
            else{
                $("#mensaje2").fadeOut();

                if(pass == ""){
                     $("#mensaje3").fadeIn("slow");
                    return false;
                }
                else{
                    $("#mensaje3").fadeOut();

                    if(fnac == "" || !expr2.test(fnac)){
                         $("#mensaje4").fadeIn("slow");
                         return false;
                    }
                    else{
                        $("#mensaje4").fadeOut();
                        
                        if(numDoc == "" || !expr1.test(numDoc)){
                            $("#mensaje5").fadeIn("slow");
                            return false;
                         }
                        else{
                            $("#mensaje5").fadeOut();
                            }
                        }
                    }  
                }  
            }
    
    });
    
});
