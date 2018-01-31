<?php
require_once '../funciones/listservicios_1.php';
//session_start();
////require_once('../servicio/funciones_adicionales.php');
//// Start the session
//
//date_default_timezone_set('America/Santiago');
//$fecha = date('d/m/Y');
//if (!isset($_SESSION["usuario"])) {
//    $_SESSION["usuario"] = $_GET['nombre'];
//    $_SESSION["rut"] = $_GET['rut'];
//    $_SESSION["tipo_personal"] = $_GET['tipo_personal'];
//    $_SESSION["cod_tipo_especialista"] = $_GET['cod_tipo_especialista'];
//} else {
//    $_SESSION["usuario"] = $_SESSION["usuario"];
//    $_SESSION["rut"] = $_SESSION["rut"];
//    $_SESSION["tipo_personal"] = $_SESSION["tipo_personal"];
//    $_SESSION["cod_tipo_especialista"] = $_SESSION["cod_tipo_especialista"];
//}
//seguridad();
?>
<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
        <title>Compras</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- elementos para datepicker jquery-1.12.4.js no compatible con bs-->
        <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"></link>
        <link rel="stylesheet" href="/resources/demos/style.css"></link>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <meta http-equiv="X-UA-Compatible" content="ie=edge"></meta>
        <link type="text/css" rel="stylesheet" href="css/cssagenda.css"> </link>     
        <link type="text/css" rel="stylesheet" href="css/style.css"></link>
        <link type="text/css" rel="stylesheet" href="css/eval.css"></link>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"></link>
        <link type="text/css" rel="stylesheet" href="css/tablefiltercss.css"></link>

        <script type="text/javascript" src="js/opagenda.js"></script> 
        <script type="text/javascript" src="js/tablefilterjs.js"></script>
        <script type="text/javascript" src="../js/AjaxUpload.2.0.min.js"></script>
        <script type="text/javascript" src="../js/utilidades.js"></script>
        <script type="text/javascript" src="../js/jquery.Rut.js"></script>
        <script type="text/javascript" src="js/funciones_grafico.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></link>

    </head>
    <body>
        <div class="container-fluid">

            <!--Inicio de Barra de Navegacion-->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img class="logo img-fluid" src="img/logo.png" alt=""></a>
                        <a class="navbar-brand" href="#">ConsultaApp</a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left">
                            <li><a href="#"> </a></li>
                            <li><a href="ingreso.php" target="_blank">Ingreso</a></li>
                            <li><a href="evaluacion.php"  target="_blank">Ficha paciente</a></li>
                            <li><a href="personal.php"  target="_blank">Personal </a></li>
                            <li ><a href="reporte.php" target="_blank">Reporte </a></li>
                            <li><a href="#"> </a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right" id="navbar-collapse-1">
                            <li><a href="#" class="navbar-link"><label id="lblusuario"><?php echo $_SESSION["usuario"]; ?></label></a></li>
                            <label id="test"></label>
                            <input type="text" id="rut_usuario" value="<?php echo $_SESSION["rut"]; ?>" hidden></input>
                            <li><button class="btn btn-default" onclick="cerrar()">cerrar sesion</button></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--Inicio de Barra de Navegacion-->
        </div>


        <div class="container">
            <!--inicio panel-->
            <div class="panel-group">
                <div class="col-md-12 col-xs-12 ">
                    <div class=" panel panel-primary">    
                        <div class="panel-heading">Orden de  compra</div>    
                        <div class="panel-body">
                            <label id="" hidden></label>
                            <div class="row form-group">
                                <div class="col-md-1">
                                    <button class="btn btn-info btn-md " id="myBtn"  data-toggle="modal" data-target="#MyModal" data-backdrop="true">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </div>
                            </div>
                            <!--                            <div class="row form-group">
                                                            <label class="col-md-1">producto:</label>
                                                            <div class="col-md-2">
                                                                <input id="txt_producto" class="form-control" type="text" disabled="">
                                                            </div>
                                                            <label class="col-md-1">codigo:</label>
                                                            <div class="col-md-2">
                                                                <input id="txt_codigo" class="form-control" type="text" disabled="">
                                                            </div>
                                                            <label class="col-md-1">categoria:</label>
                                                            <div class="col-md-2">
                                                                <input id="txt_categoria" class="form-control" type="text" disabled="">
                                                            </div>
                                                            <label class="col-md-1">precio:</label>
                                                            <div class="col-md-2">
                                                                <input id="txt_valor" class="form-control" type="text" disabled="">
                                                            </div>
                                                        </div>-->

                            <!--                            <div class=" row form-group">
                                                            <div class="col-md-4 col-md-offset-8  col-xs-6">
                                                                <button type="button" title="Aceptar"  class="btn btn-info "onclick=" agrega()"> <span  class="glyphicon glyphicon-ok small"></span>  agregar</button>
                                                                <button type="button" title=Limpiar"  class="btn btn-danger " onclick="limpiar()"> <span  class="glyphicon glyphicon-remove small"></span>  cancelar</button>
                                                            </div>
                                                        </div>-->

                            <!--inicio tabla-->
                            <div class="row form-group " style="height: 300px; overflow-y: scroll;">

                                <table class="table table-bordered table-condensed">
                                    <thead class="">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>Anular</td>
                                            <td>Cantidad</td>                               
                                            <td>Codigo</td>
                                            <td>Nombre</td>                                
                                            <td>categoria</td>
                                            <td>Valor</td>
                                        </tr>
                                    </thead>

                                    <tbody id="btabla">

                                    </tbody>
                                </table>

                            </div>
                            <!--fin tabla-->
                            <div class="row form-group">
                                <label class=" col-md-6 col-xs-12 control-label" for="desc">Totales:</label>
                            </div>

                            <div class="row form-group">
                                <label for="total">Total: <input type="text" id="total" value="0" disabled> </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--fin panel-->
        </div>

        <div class="modal fade" id="MyModal"  role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Productos</h4>
                    </div>
                    <div class="modal-body">

                        <div class="row form-group">
                            <label class="col-md-1">Nombre:</label>
                            <div class="col-md-2">
                                <input  id="nombre_service" class="form-control" type="text" >
                            </div>
                            <label class="col-md-1">categoria:</label>
                            <div class="col-md-2">
                                <select id="sel_service" class="form-control">
                                    <option> cat1 </option>
                                    <option> cat2 </option>
                                    <option> cat3 </option>
                                </select>
                            </div>

                            <label class="col-md-1">codigo:</label>
                            <div class="col-md-2">
                                    <input id="cod_service" class="form-control" type="text" >
                            </div>


                        </div>
                        <div class="row form-group" id="marco_productos">
                            <? listarconfirmados(); ?>
                        </div>  

                        <div class="modal-footer">
                            <button class="btn btn-primary" onclick="agrega()" data-dismiss="modal">agregar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>


                    </div>

                </div>
            </div>

        </div>

        <script>
            var num_fila = 1;



            function calcular_total() {

                importe_total = 0
                $(".txt_campo").each(
                        function (index, value) {
                            importe_total = importe_total + eval($(this).val()) + eval($("#total").val());
                        }
                );
                $("#total").val(importe_total);
            }

            function seleccion_servicios()
            {
                servicio = new Array();
                i = 0;
                $("#btable tr").each(function () {
                    if ($(this).children("td:nth-child(1)").children("input:checkbox").is(':checked')) {
                        id_servicio = $(this).children("td:nth-child(3)").text();
                        nombre_servicio = $(this).children("td:nth-child(4)").text();
                        categoria_servicio = $(this).children("td:nth-child(5)").text();
                        valor_servicio = $(this).children("td:nth-child(6)").text();
                        servicio[i] = new Array(id_servicio, nombre_servicio, categoria_servicio, valor_servicio);
                        i++;
                    }

                });

                return servicio;
            }

            function numeros(e) {
                key = e.keyCode || e.which;
                tecla = String.fromCharCode(key).toLowerCase();
                letras = " 0123456789";
                especiales = [8, 37, 39, 46];

                tecla_especial = false
                for (var i in especiales) {
                    if (key == especiales[i]) {
                        tecla_especial = true;
                        break;
                    }
                }

                if (letras.indexOf(tecla) == -1 && !tecla_especial)
                    return false;
            }

            function total_service() {
                //servicio = new Array();
                totale = 0;
                $("#btabla tr").each(function () {
                    totale = parseInt($(this).children("td:nth-child(4)").children("input:text").val()) * parseInt($(this).children("td:nth-child(8)").children("input:text").val()) + totale;
                    $(this).children("td:nth-child(4)").children("input:text").prop('disabled', true);
                });
                alert(totale);
                $("#total").val(totale);
                //$("#txt" + fila_id).attr('disabled', true);

            }
            function agrega()
            {
                bandera = 0;
                var servicio_tomado = seleccion_servicios();
                nombre = $("#txt_producto").val();
                codigo = $("#txt_codigo").val();
                //valor = $("#txt_valor").val();
                cat = $("#txt_categoria").val();
                //cantidad = parseInt(valor);
                total = 0;
                for (j = 0; j < servicio_tomado.length; j++) {
                    $("#btabla tr").each(function () {
                        if ($(this).children("td:nth-child(5)").text() === servicio_tomado[j][0])
                        {

                            bandera = 1;
                        }

                    });
                    if (bandera == 1)
                        alert("servicio " + servicio_tomado[j][1] + " existe por favor editelo");
                    else
                    {
                        cantidad = parseInt(servicio_tomado[j][3]);
                        $("#btabla").append("<tr id='fila" + num_fila + "'>" +
                                "<td> <span onclick='editar(this)'  class='glyphicon glyphicon-pencil small'></span></td>" +
                                "<td><span onclick='remover(this)' class='glyphicon glyphicon-remove small'></span></td>" +
                                "<td>" +
                                "<input type='checkbox'>" +
                                "</td>" +
                                "<td><input id='txtfila" + num_fila + "' type='text' onblur='total_service()' onKeyPress='return numeros(event)' value='1' disabled></td>" +
                                "<td>" + servicio_tomado[j][0] + "</td>" +
                                "<td>" + servicio_tomado[j][1] + "</td>" +
                                "<td>" + servicio_tomado[j][2] + "</td>" +
                                "<td><input id='txtdescuentofila" + num_fila + "' type='text'  value=" + cantidad + " disabled></td>" +
                                "</tr>");
                        num_fila++;
                        //calcular_total();
                        //$("#txt_descuento").val('0');
                        total_service();
                        //total = total + cantidad;

                    }
                    bandera = 0;
                }
limpiar_modal();
            }


            function remover(elemento)
            {
                fila_id = elemento.parentNode.parentNode.id;
                alert(fila_id);



                $("#" + fila_id).remove();
                total_service();
            }

            function editar(elemento)
            {
                alert("hola00");
                fila_id = elemento.parentNode.parentNode.id;
                $("#txt" + fila_id).attr('disabled', false);
                //alert(($($("#"+fila_id).eq(3))+":input").val());
                //$($("#"+fila_id).eq(3)+":input").prop( "disabled", false ); 
                //$('ul li').eq(5); 
            }

            function limpiar_modal()
            {
                $("#btable tr").each(function () {
                    $(this).children("td:nth-child(1)").children("input:checkbox").prop('checked', false);
                    $('#nombre_service').val('');
                    $('#cod_service').val('');
                    $('#sel_service').val('');
                });
            }
        </script>

    </body>
