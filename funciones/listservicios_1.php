<?php
//require_once('../clases/agenda.php');
//require_once('../clases/paciente.php');
//require_once('../servicio/funciones_adicionales.php');
//require_once('../clases/cls_servicio.php');
require_once('../negocio/reglasdatos.php');

//listarconfirmados();



function listarconfirmados() {

    
    $arrservicio = msolistaservicios();
    ?>

    <!--     <label> : </label> <label id="">  
          <input id="blockeo_agenda" value="1" hidden>
    -->
    <div class = "col-md-12 col-ms-12 col-lg-12 col-xs-12">         
        <table class="table table-condensed table-bordered" id="tableconfirma">
            <thead>
                <tr class="traltura">
                    <th>Seleccionar</th>
                    <th>N</th>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Categoria</th>

                </tr>
            </thead>
            <tbody class="table-body">             
    <?php
    for ($i = 0; $i < count($arrservicio); $i++) {
;
//             echo $i;
        ?>
                    <tr   class="traltura"> 
                        <td><input type="checkbox" ></td>
                        <td><?php echo ($i + 1); ?></td>
                        <td><?php echo $arrservicio[$i]['id_servicio']; ?></td>
                        <td><?php echo $arrservicio[$i]['nombre_servicio']; ?></td>
                        <td><?php echo $arrservicio[$i]['nombre_categoria']; ?></td>
                    </tr>

    <?php } ?>

            </tbody>
        </table>
    </div>                   
<?php } ?>

