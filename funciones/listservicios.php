<?php

//require_once('../clases/agenda.php');
//require_once('../clases/paciente.php');fdsafd
//require_once('../servicio/funciones_adicionales.php');
require_once('../clases/cls_servicio.php');
 

listarconfirmados();



function listarconfirmados(){
     $nodo = new cls_servicio();
     unset($nodo->arrservicio);
     $nodo->select();
  
  	?>
                        
     <label> : </label> <label id="">  
      <input id="blockeo_agenda" value="1" hidden>
                                   
                         
      <table class="table table-condensed table-bordered" id="tableconfirma">
        <thead>
            <tr class="traltura">
            <th>N</th>
            <th>id</th>
            <th>Nombre</th>
            <th>Categoria</th>
            
             </tr>
        </thead>
     <tbody class="table-body">             
            <?php
            
            for($i=0;$i< count($nodo->arrservicio);$i++){ ;
             echo $i;
	?>
 <tr  class="traltura">
     <td><?php echo ($i+1);?></td>
 
    <td><?php echo $nodo->arrservicio[$i]['id_nombre'] ;?></td>
    <td><?php echo $nodo->arrservicio[$i]['nombre_servicio'] ;?></td>
     <td><?php echo $nodo->arrservicio[$i]['nombre_categoria'] ;?></td>
 </tr>
  
 <?php }	?>
              
</tbody>
         </table>
                            
   	<?php } ?>

