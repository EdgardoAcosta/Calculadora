/**
 * Created by EdgardoAcosta.
 */
var StringResp = "";

//Funcion para colocar el string de operacion que se va formando
function setHistorico(str) {
    StringResp = $("#Num").val() + str;
    $("#Num").val('');
    $("#Num").val(StringResp);
}

$(document).ready(function () {


    //<editor-fold desc="Accion de botones onClick">
    $("Button").click(function () {
        setHistorico($(this).val())
    });
    $("#suma").click(function () {
        setHistorico(" + ");
    });
    $("#resta").click(function () {
        setHistorico(" - ");
    });
    $("#multi").click(function () {
        setHistorico(" * ");
    });
    $("#division").click(function () {
        setHistorico(" / ");
    });
    $("#abre").click(function () {
        setHistorico(" ( ");
    });
    $("#cierra").click(function () {
        setHistorico(" ) ");
    });
    $("#punto").click(function () {
        setHistorico(".");
    });
    $("#clean").click(function () {
        $("#Num").val('');
    });
    $("#cleanTA").click(function () {
        $("#Respuesta").val('');
    });
    //Funcion que permite hacer scroll automaticamente cuando el text area llega al fondo
    $.fn.scrollBottom = function() {
        return $(this).scrollTop($(this)[0].scrollHeight);
    };

    //Si se preciona la tecla "Enter" se calcula el resultado actual
    $("body").keyup(function (event) {
        if (event.keyCode == 13) {
            $("#igual").click();
        }
    });

    //</editor-fold>

    //Al precionar igual calcular y desplegar resultado
    $("#igual").click(function () {
        var valActual = $("#Num").val();
        //Verificar si el resultado lo debe de calcular con Jquery o con PHP
        if ($("#changeMode").is(':checked')) {
            try {
                var result = eval(valActual);
                //Verificar si el resultado de la oprecion es valido
                if (result != undefined || result != null) {
                    //Redondear valor a 4 decimales
                    result = parseFloat(result).toFixed(4);
                    //Guardar en historial el resultado de la opreacion
                    $("#Respuesta").val($("#Respuesta").val() + valActual + " = " + result + "\n").scrollBottom();
                    //Limpiar campo de entrada
                    $("#Num").val('');
                }
                else {
                    $("#Num").val('ERROR');
                }
            }
                //Si el String de operacion no es valido desplegara error
            catch (error) {
                $("#Num").val('ERROR');
            }

        } else {
            //Enviar el valor actual por POST al PHP para calcular el valor
            $.ajax({
                url: "calculos.php",
                type: "post",
                data: {'equacion': valActual},
                success: function (response) {
                    //Verificar si la respuesta no es un error
                    if (response != false) {
                        //Redondear valor a 4 decimales
                        response = parseFloat(response).toFixed(4);
                        $("#Respuesta").val($("#Respuesta").val() + valActual + " = " + response + "\n").scrollBottom();
                        //Limpiar campo de entrada
                        $("#Num").val('');
                    }
                    else {
                        $("#Num").val('ERROR');
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    //Error en la llamada
                    $("#Num").val('ERROR');
                }


            });

        }


    });

    //Cambiar texto de toggle
    $("#changeMode").on("click", function () {
        if ($("#changeMode").is(':checked')) {

            $("#opcion").text('HTML');
        } else {
            $("#opcion").text('PHP');
        }
    });


});