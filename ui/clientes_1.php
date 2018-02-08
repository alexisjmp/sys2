<?php
session_start();
require_once('../servicios/funciones_adicionales.php');
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
?>
<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Entidades</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- elementos para datepicker jquery-1.12.4.js no compatible con bs-->
        <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link type="text/css" rel="stylesheet" href="css/cssagenda.css">      
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/eval.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/tablefiltercss.css">

        <script type="text/javascript" src="js/opagenda.js"></script> 
        <script type="text/javascript" src="js/tablefilterjs.js"></script>
        <script type="text/javascript" src="../js/AjaxUpload.2.0.min.js"></script>
        <script type="text/javascript" src="../js/utilidades.js"></script>
        <script type="text/javascript" src="../js/jquery.Rut.js"></script>
        <script type="text/javascript" src="js/funciones_grafico.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
        
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script>//function cargar_reporte()
//                {
//                    fechain = $("#datepicker_rpinicio").val();
//                    fechafin = $("#datepicker_rpfin").val();
//                    slestado = $("#slestado_agenda").val();
//                    slespecialista = $("#sltipo_especialista").val();
//
//                    slprestaciones = $("#sl_prestaciones").val();
//                   // radmes = $("#raddia_fecha_atencion").val();
//                   // funcion para los radio button de los turnos
//                    var selectedVal = "";
//                    var selected = $("input[type='radio'][name='radio_fecha_atencion']:checked");
//                    if (selected.length > 0) { 
//                        radio_fechas = selected.val();
//                    }
//                       // alert(radio_fechas);
//                    // funcion para los radio button de los turnos    
//                    var selected = $("input[type='radio'][name='radio_turnos']:checked");
//                    if (selected.length > 0) { 
//                    radio_turno = selected.val();
//                    }
//                    //alert(radio_turno);    
//                    data='fecha_atencion_in='+fechain+'&radio_fecha_atencion='+radio_fechas
//                    + '&fecha_atencion_fin='+ fechafin + '&estado_agenda=' + slestado + '&tipo_especialista='
//                            + slespecialista+'&radio_turnos='+radio_turno+'&sl_prestaciones='+slprestaciones;
//                    //  alert(fechain);
//                    //alert(fechafin);
//                    //   alert(slestado);
//                    //alert(slespecialista);
//                    marco = "marcoreportetabla";
//                    ruta = "../reporte/tabla.php";
//                    sendajax(marco, ruta, data);
//                }
//                function ventana_grafico() {
//                ruta = "ventana_grafico.php";
//                
//                fechain = $("#datepicker_rpinicio").val();
//                
//                    fechafin = $("#datepicker_rpfin").val();
//                    slestado = $("#slestado_agenda").val();
//                    slespecialista = $("#sltipo_especialista").val();
//                    radanio = $("#radio_fecha_atencion").val();
//                    radturnos = $("#radio_turnos").val();
//                   // radmes = $("#raddia_fecha_atencion").val();
//                   // funcion para los radio button de los turnos
//                    var selectedVal = "";
//                    var selected = $("input[type='radio'][name='radio_fecha_atencion']:checked");
//                    if (selected.length > 0) { 
//                        radio_fechas = selected.val();
//                    }
//                       // alert(radio_fechas);
//                    // funcion para los radio button de los turnos    
//                    var selected = $("input[type='radio'][name='radio_turnos']:checked");
//                    if (selected.length > 0) { 
//                    radio_turno = selected.val();
//                    }
//                        
//                    //cargar_grafico('2017-11-14');
//                    
//                    
//                     data='fecha_atencion_in='+fechain+'&radio_fecha_atencion='+radio_fechas
//                    + '&fecha_atencion_fin=' + fechafin + '&estado_agenda=' + slestado + '&tipo_especialista='
//                            + slespecialista+'&radio_turnos='+radio_turno;
//                    
//                 
//                             AbrirVentana(ruta,data, "", 600, 500);
//                             
//                
//
//            }

            function validacionbolean(inpObj) {
                if (!inpObj.checkValidity()) {        
            return true;
                } else {        
            return false;
                }
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
            function validacion(){
            
            msg = "Falta. \n";
                    bander = 0;
                    
                    inpObj = document.getElementById("txt_rut");
                    if (validacionbolean(inpObj))
                    {
                        
                        bander = 1;
                        msg += "Rut: No valido <br>";
                        //'<div class="alert alert-success alert-dismissable" ><h3> que paso aqui</h3></div>';
                    }
                    inpObj = document.getElementById("txt_verificador");
                    if (validacionbolean(inpObj))
                    {
                    
                        bander = 1;
                        msg += "Rut: No valido y verificador novalido <br>";
                    }
                    inpObj = document.getElementById("txt_razon_social");
                    if (validacionbolean(inpObj))
                    {
                    
                        bander = 1;
                        msg += "razon social: No valida <br>";
                    }
                    inpObj = document.getElementById("txt_giro");
                    if (validacionbolean(inpObj))
                    {
                    
                        bander = 1;
                        msg += "Giro: No novalido <br>";
                    }
                    inpObj = document.getElementById("txt_direccion");
                    if (validacionbolean(inpObj))
                    {
                        bander = 1;
                        msg += "Direccion: No novalido <br>";
                    }
                    inpObj = document.getElementById("txt_ciudad");
                    if (validacionbolean(inpObj))
                    {
                    
                        bander = 1;
                        msg += "Ciudad: No novalido <br>";
                    }
                    inpObj = document.getElementById("txt_fono");
                    if (validacionbolean(inpObj))
                    {
                    
                        bander = 1;
                        msg += "Telefono: No novalido <br>";
                    }
                    inpObj = document.getElementById("txt_email");
                    if (validacionbolean(inpObj))
                    {
                    
                        bander = 1;
                        msg += "Correo: No valido <br>";
                    }
                     if (bander == 0)
                        $('$alert').hide();
                    else{
                        showAlert(msg);
                    }  
                    
            }
            
            function limpiar(){
                    $("#txt_rut").val('');
                    $("#txt_verificador").val('');
                    $("#txt_razon_social").val('');
                    $("#txt_giro").val('');
                    $("#txt_direccion").val('');
                    $("#txt_ciudad").val('');
                    $("#txt_comuna").val('');
                    $("#slcondicion").val('');
                    $('#datepicker_rpinicio').val('<?php echo date('d/m/Y'); ?>');
                    $("#txt_fono").val('');
                    $("#txt_fax").val('');
                    $("#txt_email").val('');
                    $("#txt_contacto").val('');
                    $("#txt_ranking").val('');
                    $("#txt_servicio").val('');
                    $("#txt_nombref").val('');
                    
                    
                    
                }
                
                function numeros(e){
                key = e.keyCode || e.which;
                tecla = String.fromCharCode(key).toLowerCase();
                letras = " 0123456789";
                especiales = [8,37,39,46];

                tecla_especial = false
                for(var i in especiales){
                    if(key == especiales[i]){
                tecla_especial = true;
                 break;
                    } 
                }
 
                if(letras.indexOf(tecla)==-1 && !tecla_especial)
                return false;
            }
            
            </script>    
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
                        <li><a href="#" class="navbar-link"><label id="lblusuario"><?php  echo $_SESSION["usuario"]; ?></label></a></li>
                        <label id="test"></label>
                        <input type="text" id="rut_usuario" value="<?php echo $_SESSION["rut"];?>" hidden>
                        <li><button class="btn btn-default" onclick="cerrar()">cerrar sesion</button></li>
                    </ul>
                </div>
            </div>
        </nav>
  </div>
            <div class="container">
            <div class="panel-group">
                <div class="col-md-10 col-md-offset-1 col-xs-6 ">
            <div class="panel-info">    
            <div class="panel-heading">Mantenedor entidades</div>    
            <div class="panel-body">
            <label id="" hidden></label>
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-6 row">
                        <label class=" col-md-4 col-xs-12 control-label " for="rut">R.U.T :</label>
                        <div class="col-md-5 col-xs-12 row ">
                            <input type="text" id="txt_rut" class="form-control"   placeholder="9999999" pattern="\d{3,8}" required > 
                        </div>
                        <div class="col-md-1 col-xs-12 ">
                           <span class="input-lg ">-</span> 
                        </div>
                        <div class="col-md-3 col-xs-12 ">
                            <input type="text-inline" id="txt_verificador" class="form-control" placeholder="9"    pattern="\d|kK{1}" required >  
                        </div>   
                    </div>
                    <div class="col-md-1  col-xs-12 row">
                        <span  class="glyphicon glyphicon-asterisk small"></span>                        
                    </div>
                    <div class="col-md-1  col-xs-12 row">
                        <button type="button" title="Buscar"  class="btn btn-info "onclick=""> <span  class="glyphicon glyphicon-search small"></span></button>
                    </div>
                    <div class="col-md-4  col-xs-6   ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="razon_social">Rázon social :</label>
                                    <div class="col-md-7 col-xs-12 row">
                                        <input type="text-inline" id="txt_razon_social" class="form-control"   placeholder="" pattern="[A-Za-z]{0,15}" required >
                                    </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row ">
                        <span  class="glyphicon glyphicon-asterisk small"></span>                        
                    </div>
                    <div class="col-md-1  col-xs-12 row">
                                                <button type="button" title="Aceptar"  class="btn btn-info "onclick=""> <span  class="glyphicon glyphicon-new-window small"></span></button>
                    </div>
                </div><!-- fin la primera fila -->
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-6 row ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="giro">Giro :</label>
                                    <div class="col-md-8 col-xs-12 row">
                                        <input type="text-inline" id="txt_giro" class="form-control"   placeholder="" pattern="[A-Za-z0-9]{0,15}" required >
                                    </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">
                        <span  class="glyphicon glyphicon-asterisk small"></span>                        
                    </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                    
                    <div class="col-md-4  col-xs-6 ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="fecha">Fecha de ingreso :</label>
                                    <div class="col-md-7 col-xs-12 row"> 
                                        <input type="text-inline" id="datepicker_rpinicio" class="form-control"   placeholder="dd/mm/yyyy" value="<?php echo date('d/m/Y'); ?>">
                                    </div>
                    </div>
<!--                    <div class="col-md-4  col-xs-6  ">
                        <label class=" col-md-5 l-xs-12 control-label" for="dirrecion">Dirección :</label>
                        <div class="col-md-7 col-xs-12 row">
                            <input type="text-inline" id="txt_direccion" class="form-control"   placeholder="" pattern="[A-Za-z0-9._]{0,15}" required >
                        </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">
                        <span  class="glyphicon glyphicon-asterisk small"></span>                        
                    </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>-->
                </div><!-- fin la segunda fila -->
<!--                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-6 row ">
                        <label class=" col-md-4 col-xs-12 control-label" for="ciuda">Ciudad :</label>
                        <div class="col-md-9 col-xs-12 row">
                            <input type="text-inline" id="txt_ciudad" class="form-control"   placeholder="" pattern="[A-Za-z]{0,15}" required >
                        </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">
                            <span  class="glyphicon glyphicon-asterisk small"></span>                        
                        </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                    <div class="col-md-4  col-xs-6  ">
                        <label class=" col-md-5 col-xs-12 control-label" for="comuna">Comuna :</label>
                        <div class="col-md-7 col-xs-12 row">
                            <input type="text-inline" id="txt_comuna" class="form-control"   placeholder="" required >
                        </div>
                    </div>
                </div> fin la tercera fila -->
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-6 row ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="condicion_pago">Condición de pago :</label>
                                    <div class="col-md-8 col-xs-12 row">
                                        <select  class="form-control"id="slcondicion" name="slcondicion">
                                        <option value=""></option>
                                        <option value="0">Contado </option>
                                        <option value="1">Tarjeta </option>
                                        <option value="2">Cheque </option>
                                    </select>
                                    </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">                        
                        </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                    
                    <div class="col-md-4 col-xs-6  ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="fono">Fono :</label>
                                    <div class="col-md-7 col-xs-12 row">
                                        <input type="text-inline" id="txt_fono" class="form-control"  onKeyPress="return numeros(event)" pattern="[0-9]{0,8}" required >
                                    </div>
                    </div>
                    
                </div><!-- fin la cuarta fila -->
<!--                <div class="row form-group">
                    
                    <div class="col-md-1  col-xs-12 row">                        
                        </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                    <div class="col-md-4  col-xs-6 ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="fax"> Fax :</label>
                                    <div class="col-md-7 col-xs-12 row">
                                        <input type="text-inline" id="txt_fax" class="form-control"   placeholder="" required >
                                    </div>
                    </div>
                </div> fin la quinta fila -->
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-6 row ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="correo">Email :</label>
                                    <div class="col-md-8 col-xs-12 row">
                                        <input type="text-inline" id="txt_email" class="form-control"   placeholder="" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required >
                                    </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">                        
                        </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                    <div class="col-md-4  col-xs-6 ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="contacto"> Contacto :</label>
                                    <div class="col-md-7 col-xs-12 row">
                                        <input type="text-inline" id="txt_contacto" class="form-control"   placeholder="" required >
                                    </div>
                    </div>
                </div><!-- fin la sexta fila -->
<!--               <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-6 row ">
                                    <label class=" col-md-4 col-xs-12 control-label" for="ranking">ranking :</label>
                                    <div class="col-md-9 col-xs-12 row">
                                        <input type="text-inline" id="txt_ranking" class="form-control"   placeholder="" required >
                                    </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">                        
                        </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                    <div class="col-md-4  col-xs-6 ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="servicio"> servicio :</label>
                                    <div class="col-md-7 col-xs-12 row">
                                        <input type="text-inline" id="txt_servicio" class="form-control"   placeholder="" required >
                                    </div>
                    </div>
                </div> fin la septima fila -->
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-6 row ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="nombref">Nombre de fantasia :</label>
                                    <div class="col-md-8 col-xs-12 row">
                                        <input type="text-inline" id="txt_nombref" class="form-control"   placeholder="" required >
                                    </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">                        
                        </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                </div><!-- fin la septima fila -->
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-7  col-xs-6">
                        <button type="button" title="Aceptar"  class="btn btn-info "onclick=" registrar()"> <span  class="glyphicon glyphicon-floppy-disk small"></span>  agregar</button>
                        <button type="button" title=Limpiar"  class="btn btn-danger " onclick="limpiar()"> <span  class="glyphicon glyphicon-refresh small"></span>  limpiar</button>
                    </div>
                </div>
                <div class="row">
                    <div id="alert" class="col-md-8 col-xs-8">  </div>
                </div> 
                <div class="panel panel-default">
                <div class="row" >
                <div class="col-xs-12 col-md-12">  
                    <div class="panel-body" runat="server"  style="height: 390px;  overflow-y: scroll;">
                <div id="marcoreportetabla">
                </div>
                </div>
                </div>
                </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>   
            
            
        </body>
        <script>
//        $(document).ready(function () {
//            $("#Btnexportar").click(function () {
//                fechain = $("#datepicker_rpinicio").val();
//                fechafin = $("#datepicker_rpfin").val();
//                slestado = $("#slestado_agenda").val();
//                slespecialista = $("#sltipo_especialista").val();
//
//                fechain = fechain.trim();
//                fechafin = fechafin.trim();
//                slestado = slestado.trim();
//                slespecialista = slespecialista.trim();
//
//                        //  fecha = $('#datepicker3').val();   
//                        if (fechain.length > 0) {
//                            var parametros = 'fecha_atencion_in=' + fechain + '&fecha_atencion_fin=' + fechafin + '&estado_agenda=' + slestado + '&tipo_especialista=' + slespecialista;
//                            AbrirVentana("../reporte/rpt_pdfagenda.php", parametros, "", 600, 500);
//                        } else {
//                            alert("Seleccion un paciente");
//                            // document.getElementById("datepicker3").focus();
//                        }
//
//                    });
//                });
function registrar()
{
    this.close();
}
        </script>
</html>






