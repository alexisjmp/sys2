<?php
require_once('../clases/cls_servicio.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// **********************
// SERVICIO
// **********************
if($_POST['funcion']== 'listaservicios')
   listaservicios(); 
if($_POST['funcion']== 'buscaservicios')
   buscaservicios();
if($_POST['funcion']== 'munestadoservicio')
   munestadoservicio();
if($_POST['munservicio']== 'munservicio')
   munservicio();
if($_POST['funcion']== 'miiservicio')
   miiservicio();
if($_POST['munservicio']== 'dnneleminaservicio')
   dnneleminaservicio();
// **********************
// CLIENTE
// **********************
if($_POST['funcion']== 'miicliente')
   miicliente();
if($_POST['funcion']== 'muncliente')
   muncliente();
if($_POST['funcion']== 'mdncliente')
   mdncliente();

// **********************
// SERVICIO
// **********************
function msolistaservicios(){
     $nodo = new cls_servicio();
     unset($nodo->arrservicio);
     $nodo->select();
     //$myJSON = json_encode($nodo->arrservicio);
     //echo $myJSON;
     return $nodo->arrservicio;
   
}
function msobuscaservicios($opc, $nombre_servicio, $id_categoria){
     $nodo = new cls_servicio();
     $nodo->setopc($opc);
     $nodo->setnombre_servicio($nombre_servicio);
     $nodo->setid_categoria($id_categoria);
     $nodo->busquedaservicios();
     //$myJSON = json_encode($nodo->arrservicio);
     //echo $myJSON;
     return $nodo->arrservicio;
   
}
function munestadoservicio(){
    $id_servicio = $_POST['id_servicio'];
    $estado_ervicio = $_POST['estado_servicio'];
    $nodo = new cls_servicio();
    $nodo->setid_servicio($id_servicio);
    $nodo->setestado_servicio($estado_servicio);
    $nodo->updateestado();
}
function munservicio(){
    $id_servicio = $_POST['id_servicio'];
    $id_categoria = $_POST['id_categoria'];
    $nombre_servicio = $_POST['_servicio'];
    $descripcion_servicio = $_POST['_servicio'];
    //$estado_servicio = $_POST['estado_servicio'];
    $precio = $_POST['precio'];
        
    $nodo = new cls_servicio();
    $nodo->setid_servicio($id_servicio);
    $nodo->setid_categoria($id_categoria);
    $nodo->setnombre_servicio($nombre_servicio);
    $nodo->setdescripcion_servicio($descripcion_servicio);
    //$nodo->setestado_servicio($estado_servicio);
    $nodo->setprecio($precio);
    $nodo->update();
}
function miiservicio(){
    $id_servicio = $_POST['id_servicio'];
    $id_categoria = $_POST['id_categoria'];
    $nombre_servicio = $_POST['_servicio'];
    $descripcion_servicio = $_POST['_servicio'];
    //$estado_servicio = $_POST['estado_servicio'];
    $precio = $_POST['precio'];
        
    $nodo = new cls_servicio();
    $nodo->setid_servicio($id_servicio);
    $nodo->setid_categoria($id_categoria);
    $nodo->setnombre_servicio($nombre_servicio);
    $nodo->setdescripcion_servicio($descripcion_servicio);
    //$nodo->setestado_servicio($estado_servicio);
    $nodo->setprecio($precio);
    $nodo->insert();
}
function mdneleminaservicio(){
    $id_servicio = $_POST['id_servicio'];
    //$estado_ervicio = $_POST['estado_servicio'];
    $nodo = new cls_servicio();
    $nodo->setid_servicio($id_servicio);
    //$nodo->setestado_servicio($estado_servicio);
    $nodo->delete();
}
// **********************
// Categoria
// **********************
?>