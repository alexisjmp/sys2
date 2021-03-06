<?php
require_once("../conexion/Conexion.php");
/*
*
* -------------------------------------------------------
* CLASSNAME:        cls_servicio
* GENERATION DATE:  26.01.2018
* CLASS FILE:       /var/www/generator/generated_classes/class.cls_servicio.php
* FOR MYSQL TABLE:  servicio
* FOR MYSQL DB:     servicios
* -------------------------------------------------------
* CODE GENERATED BY:
* MY PHP-MYSQL-CLASS GENERATOR
* from: >> www.voegeli.li >> (download for free!)
* -------------------------------------------------------
*
*/


// **********************
// CLASS DECLARATION
// **********************

class cls_servicio
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $id_servicio;   // KEY ATTR. WITH AUTOINCREMENT

var $id_categoria;   // (normal Attribute)
var $nombre_servicio;   // (normal Attribute)
var $descripcion_servicio;   // (normal Attribute)
var $estado_servicio;   // (normal Attribute)
var $precio;   // (normal Attribute)

var $database; // Instance of class database
var $arrservicio;
var $opc;


// **********************
// CONSTRUCTOR METHOD
// **********************

function cls_servicio()
{
 $this->database = new MySQL();
//$this->database = new Database();

}


// **********************
// GETTER METHODS
// **********************


function getid_servicio()
{
return $this->id_servicio;
}

function getid_categoria()
{
return $this->id_categoria;
}

function getnombre_servicio()
{
return $this->nombre_servicio;
}

function getdescripcion_servicio()
{
return $this->descripcion_servicio;
}

function getestado_servicio()
{
return $this->estado_servicio;
}

function getprecio()
{
return $this->precio;
}
function getopc()
{
return $this->opc;
}
// **********************
// SETTER METHODS
// **********************


function setid_servicio($val)
{
$this->id_servicio =  $val;
}

function setid_categoria($val)
{
$this->id_categoria =  $val;
}

function setnombre_servicio($val)
{
$this->nombre_servicio =  $val;
}

function setdescripcion_servicio($val)
{
$this->descripcion_servicio =  $val;
}

function setestado_servicio($val)
{
$this->estado_servicio =  $val;
}

function setprecio($val)
{
$this->precio =  $val;
}
function setopc($val)
{
$this->opc =  $val;
}

// **********************
// SELECT METHOD / LOAD
// **********************

function busquedaservicios(){
  $opc = $this->getopc();
  $search = $this->getnombre_servicio();
  $id_categoria = $this->getid_categoria();
  $id_servicio = $this->getid_servicio();
  
  $search = $search.'%';  
  if($opc == 1)
       $sql = "select * from servicio s left join categoria c on s.id_categoria = c.id_categoria where  s.nombre_servicio LIKE '$search' and  s.estado_servicio > 0 order by s.nombre_servicio asc" ; 
  else  if($opc == 2)
       $sql = "select * from servicio s left join categoria c  on s.id_categoria = c.id_categoria  where  s.id_categoria = '$id_categoria' and  s.estado_servicio > 0  order by s.nombre_servicio asc" ; 
  else  if($opc == 3)
       $sql = "select * from servicio s left join categoria c  on s.id_categoria = c.id_categoria  where  s.id_servicio = '$id_servicio' and  s.estado_servicio > 0  order by s.nombre_servicio asc" ; 
  $resultado = $this->database->consulta($sql);
  $i=0;
    while($row = $this->database->fetch_array($resultado)){
       $this->arrservicio[$i]['id_servicio'] = $row['id_servicio'];
       $this->arrservicio[$i]['id_categoria'] = $row['id_categoria'];
       $this->arrservicio[$i]['nombre_servicio'] = $row['nombre_servicio'];
       $this->arrservicio[$i]['descripcion_servicio'] = $row['descripcion_servicio'];
       $this->arrservicio[$i]['estado_servicio'] = $row['estado_servicio'];
       $this->arrservicio[$i]['precio'] = $row['precio'];
       
       $this->arrservicio[$i]['cat_id_categoria'] = $row['cat_id_categoria'];
       $this->arrservicio[$i]['nombre_categoria'] = $row['nombre_categoria'];
       $this->arrservicio[$i]['descripcion_categoria'] = $row['descripcion_categoria'];
       $i++;
    }
      
}

function select()
{

$sql =  "SELECT * FROM servicio s left join categoria c on s.id_categoria = c.id_categoria ";
 
  $resultado = $this->database->consulta($sql);
  $i=0;
    while($row = $this->database->fetch_array($resultado)){
       $this->arrservicio[$i]['id_servicio'] = $row['id_servicio'];
       $this->arrservicio[$i]['id_categoria'] = $row['id_categoria'];
       $this->arrservicio[$i]['nombre_servicio'] = $row['nombre_servicio'];
       $this->arrservicio[$i]['descripcion_servicio'] = $row['descripcion_servicio'];
       $this->arrservicio[$i]['estado_servicio'] = $row['estado_servicio'];
       $this->arrservicio[$i]['precio'] = $row['precio'];
       
       $this->arrservicio[$i]['cat_id_categoria'] = $row['cat_id_categoria'];
       $this->arrservicio[$i]['nombre_categoria'] = $row['nombre_categoria'];
       $this->arrservicio[$i]['descripcion_categoria'] = $row['descripcion_categoria'];
       $i++;
    }

}

// **********************
// DELETE
// **********************

function delete()
{
$id = $this->getid_servicio();    
$sql = "DELETE FROM servicio WHERE id_servicio = $id;";
$result = $this->database->consulta($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->id_servicio = ""; // clear key for autoincrement

$sql = "INSERT INTO servicio ( id_categoria,nombre_servicio,descripcion_servicio,estado_servicio,precio ) VALUES ( '$this->id_categoria','$this->nombre_servicio','$this->descripcion_servicio','$this->estado_servicio','$this->precio' )";
$result = $this->database->consulta($sql);
$this->id_servicio = mysql_insert_id();

}

// **********************
// UPDATE
// **********************
function updateestado()
{
$id = $this->getid_servicio();       
$sql = " UPDATE servicio SET  estado_servicio = '$this->estado_servicio' WHERE id_servicio = '$id' ";
$result = $this->database->consulta($sql);
}

function update()
{
$id = $this->getid_servicio();    
$sql = " UPDATE servicio SET  id_categoria = '$this->id_categoria',nombre_servicio = '$this->nombre_servicio',descripcion_servicio = '$this->descripcion_servicio',estado_servicio = '$this->estado_servicio',precio = '$this->precio' WHERE id_servicio = '$id' ";
$result = $this->database->consulta($sql);
}

}?>