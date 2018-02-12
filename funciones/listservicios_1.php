<?php
//require_once('../clases/agenda.php');
//require_once('../clases/paciente.php');
//require_once('../servicio/funciones_adicionales.php');
//require_once('../clases/cls_servicio.php');
require_once('../negocio/reglasdatos.php');

if($_GET['funcion']== 'listaservicios')
listarconfirmados();



function listarconfirmados(){

    $nombre=$_GET['nombre'];
    $opc=$_GET['opc'];
    $cat=$_GET['cat'];
    $cod=$_GET['cod'];
    
    $arrservicio =  msobuscaservicios($opc,$nombre,$cat,$cod);
    ?>

    <!--     <label> : </label> <label id="">  
          <input id="blockeo_agenda" value="1" hidden>
    -->

    
        <table class="table table-bordered table-condensed" id="tableconfirma">
            <thead>
                <tr class="">
                     <th>N</th>
                    <th>Seleccionar</th>
                    
                    <th hidden>id</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>valor</th>
                </tr>
            </thead>
            <tbody id="btable" class="">             
    <?php
    for ($i = 0; $i < count($arrservicio); $i++) {
;
//             echo $i;
        ?>
                    <tr   > 
                        <td><?php echo ($i + 1); ?></td>
                        <td><input type="checkbox" ></td>
                        
                        <td hidden><?php echo $arrservicio[$i]['id_servicio']; ?></td>
                        <td><?php echo $arrservicio[$i]['nombre_servicio']; ?></td>
                        <td><?php echo $arrservicio[$i]['nombre_categoria']; ?></td>
                        <td><?php echo $arrservicio[$i]['precio']; ?></td>
                    </tr>

    <?php } ?>

            </tbody>
        </table>
                
<?php } ?>
