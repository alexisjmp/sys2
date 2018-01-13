<? /*
  session_start();
  require_once('../servicio/funciones_adicionales.php');
  // Start the session

  date_default_timezone_set('America/Santiago');
  $fecha = date('d/m/Y');
  if (!isset($_SESSION["usuario"])) {
  $_SESSION["usuario"] = $_GET['nombre'];
  $_SESSION["rut"] = $_GET['rut'];
  $_SESSION["tipo_personal"] = $_GET['tipo_personal'];
  $_SESSION["cod_tipo_especialista"] = $_GET['cod_tipo_especialista'];
  } else {
  $_SESSION["usuario"] = $_SESSION["usuario"];
  $_SESSION["rut"] = $_SESSION["rut"];
  $_SESSION["tipo_personal"] = $_SESSION["tipo_personal"];
  $_SESSION["cod_tipo_especialista"] = $_SESSION["cod_tipo_especialista"];
  }

  //seguridad();
 */ ?>
<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Prestacion</title>
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
        <link type="text/css" rel="stylesheet" href="css/cssagenda.css">   </link>   
        <link type="text/css" rel="stylesheet" href="css/style.css"></link>
        <link type="text/css" rel="stylesheet" href="css/eval.css"></link>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"></link>
        <link type="text/css" rel="stylesheet" href="css/tablefiltercss.css"></link>

        <script type="text/javascript" src="js/opagenda.js"></script> 
        <script type="text/javascript" src="js/tablefilterjs.js"></script>
        <script type="text/javascript" src="../js/AjaxUpload.2.0.min.js"></script>
        <script type="text/javascript" src="../js/utilidades.js"></script>
        <script type="text/javascript" src="../js/jquery.Rut.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></link>
        <!--keypress-->
        <script>
            function buscar_nombre()
            {
                data = '';
                marco = 'marco_nombres';
                ruta = '../funciones/lista_prestacion_nombres.php';
                sendajax(marco, ruta, data)
            }

            function validar_solo_letras(inpObj) {
                if (!inpObj.checkValidity()) {
                    return true;
                } else {
                    return false;
                }
            }

            function ingresar_prestacion()
            {
                msg = "Problemas encontrados: <br>";
                bander = 0;
                inpObj = document.getElementById("txtnombre");
                if (validar_solo_letras(inpObj))
                {
                    bander = 1;
                    msg += "-El Nombre debe contener solo letras y no debe sobrepasar las 12 letras <br>"
                }
                inpObj = document.getElementById("txtdescrpcion");
                if (validar_solo_letras(inpObj))
                {
                    bander = 1;
                    msg += "-La descripcion debe contener solo letras y no debe sobrepasar las 50 letras <br>";
                }
                inpObj = document.getElementById("txtprecio");
                if (validar_solo_letras(inpObj))
                {
                    bander = 1;
                    msg += "-El precio debe estar constituido solamente por numeros <br>";
                }

                if (bander == 0)
                    $('#alert').hide();
                else {

                    showAlert(msg);
                }
            }

            function limpiar()
            {
                $('#txtnombre').val('');
                $('#txtdescrpcion').val('');
                $('#txtprecio').val('');
            }
            function showAlert(message) {
                //alert(message);
                $('#alert').html('<div class="alert alert-danger alert-dismissable ">' +
                        '<button type="button" class="close" ' +
                        'data-dismiss="alert" aria-hidden="true">' +
                        '&times;' +
                        '</button>' + '<strong>' +
                        message + '</strong>' +
                        '</div>');
                $('#alert').show();
            }

        </script>
    </head>
    <body>
        <label >aqui va el id</label >

        <div class="container">
            <div class="panel-group">
                <div class="panel panel-info">
                    <div class="panel-heading">Formulario de Categorias</div>        
                    <div class="panel-body  ">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="row form-group ">
                                    <div class="col-md-1 col-md-offset-4  col-xs-12">
                                        <button type="button"  class="btn btn-info " data-toggle="modal" data-target="#myModal"
                                                onclick="buscar_nombre()"> <span class="glyphicon glyphicon-search small"></span></button>
                                    </div>
                                </div>
                                <div class="row form-group ">

                                    <label class=" col-md-4 col-xs-12 control-label" for="pres-nombre">Nombre</label>
                                    <div class="col-md-7 col-xs-12">
                                        <input type="text" id="txtnombre" class="form-control" pattern="[A-Za-z]{0,12}" placeholder="ej. Bastian" required>
                                    </div>

                                </div>

                                <div class="row form-group">    
                                    <label class="col-md-4 col-xs-12 control-label"  >Categoria</label>
                                    <div class="col-md-7 col-xs-12">
                                        <select class="form-control">
                                            <option> elija una categoria</option>
                                            <option> hola</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">    
                                    <label class="col-md-4 col-xs-12 control-label"  >Descripcion</label>
                                    <div class="col-md-7 col-xs-12">
                                        <input type="text" id="txtdescrpcion" class="form-control " pattern="[A-Za-z0-9. _-]{0,50}"  required >
                                    </div>
                                </div>

                                <div class="row form-group">    
                                    <label class="col-md-4 col-xs-12 control-label"  >Precio</label>
                                    <div class="col-md-7 col-xs-12">
                                        <input type="text" id="txtprecio" class="form-control " placeholder="$" pattern="[0-9]{0,50}"  required >
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4 col-md-6  col-md-offset-4 col-xs-12">
                                        <div class="form-group ">   
                                            <button type="button"  class="btn btn-success " id="btn_prestacion"  data-toggle="tooltip" data-placement="right" title="Aceptar" onclick="ingresar_prestacion()"><span class="	glyphicon glyphicon-ok"></span></button>
                                            <button type="button"  class="btn btn-default" id="btn_prestacion"  data-toggle="tooltip" data-placement="right" title="Aceptar" onclick="limpiar()"><span class="glyphicon glyphicon-file"></span></button>
                                        </div>           
                                    </div>

                                </div>
                            </div>
                            <div id="alert" class="col-lg-8 col-md-8 col-xs-12"></div>
                        </div>
                    </div>    
                </div>    
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Nombre personal</h4>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-lg-9 col-md-10 col-sm-9">
                                        <div  class="table-responsive" id="marco_nombres">

                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </body>