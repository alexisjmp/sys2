<?php

//require_once('../clases/agenda.php');
//require_once('../clases/paciente.php');
//require_once('../servicio/funciones_adicionales.php');
 

listarconfirmados();



function listarconfirmados(){
     $nodo = new agenda();
        unset($nodo->rptagendadiaria);
        $fecha = cambiaf_a_mysql($_POST['fecha']);
       
        $nodo->msorptagendado($fecha);
  	?>
                        
<label>Fecha de registro hora: </label> <label id="fecha_confirma"><p> <?php echo $_POST['fecha'];?></p></label>  
                                 <input id="blockeo_agenda" value="1" hidden>
                                   
                         
                                <table class="table table-condensed table-bordered" id="tableconfirma">
                            <thead>
                                <tr class="traltura">
                                      <th>N°</th>
                                    <th>X</th>
                                
                                <th  >Nombre</th>
                                <th  >Descripcion</th>
                                <th >Categoria</th>
                                <th >Pago</th>
                             <!--   <th >hora</th>-->
<!--                                <th >Especialista</th>
                                <th >atencion</th>
                                </tr>-->
                            </thead>
     <tbody class="table-body">             
            <?php
            
            for($i=0;$i< count($nodo->rptagendadiaria);$i++){ ;
             //   echo $arrAgendado[$i][0].'-'.$arrAgendado[$i][1].'-'.$arrAgendado[$i][2].'-'.$arrAgendado[$i][3].'<br>';
	?>
 <tr  class="traltura">
     <td><?phpecho ($i+1);?></td>
     <td><?php if($nodo->rptagendadiaria[$i]['confirma']=='1') $chequeado= 'checked="checked"';  else  $chequeado= '';   ?>
           <input type="checkbox" onclick="confirmarhora(this)"    <?php echo $chequeado;?> /> 
     </td> 
     <td style="display: none;" ><?php echo $nodo->rptagendadiaria[$i]['id_agenda'];?> </td>    
    
     <td ><?php echo strtolower($nodo->rptagendadiaria[$i]['nombre_paciente']);?> </td>  
     <td ><?php echo strtolower($nodo->rptagendadiaria[$i]['apellido_ppaciente']);?> </td>  
     <td><?php echo $nodo->rptagendadiaria[$i]['fono_paciente'];?></td>  
   <!--   <td  ><?php echo cambiaf_a_normal($nodo->rptagendadiaria[$i]['fecha_atencion']);?></td> -->
     <td  ><?php echo $nodo->rptagendadiaria[$i]['hora_atencion'];?></td> 
     <td><?php
         if($nodo->rptagendadiaria[$i]['tipo_atencion']==1 )
            echo especialista(4)    ;
         else
            echo especialista($nodo->rptagendadiaria[$i]['tipo_especialista'])    ; 
         ?>    
    </td>  
    <td><?php echo atencion($nodo->rptagendadiaria[$i]['tipo_atencion']) ;?></td>
    
     
 </tr>
  
 <?php }	?>
              
</tbody>
         </table>
                            
   	<?php } ?>

