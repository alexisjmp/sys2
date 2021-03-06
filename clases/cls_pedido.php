<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        cls_detalle_pedido
* GENERATION DATE:  27.01.2018
* CLASS FILE:       /var/www/generator/generated_classes/class.cls_detalle_pedido.php
* FOR MYSQL TABLE:  det_pedido
* FOR MYSQL DB:     servicios
* -------------------------------------------------------
* CODE GENERATED BY:
* MY PHP-MYSQL-CLASS GENERATOR
* from: >> www.voegeli.li >> (download for free!)
* -------------------------------------------------------
*
*/

require_once("../conexion/Conexion.php");

// **********************
// CLASS DECLARATION
// **********************

class cls_detalle_pedido
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $id_dpedido;   // KEY ATTR. WITH AUTOINCREMENT

var $id_pedido;   // (normal Attribute)
var $impuesto_dpedido;   // (normal Attribute)
var $descuento_dpedidol;   // (normal Attribute)
var $estado_dpedido;   // (normal Attribute)
var $impuesto_total_dpedido;   // (normal Attribute)
var $total_dpedido;   // (normal Attribute)

var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function cls_detalle_pedido()
{

$this->database = new MySQL();

}


// **********************
// GETTER METHODS
// **********************


function getid_dpedido()
{
return $this->id_dpedido;
}

function getid_pedido()
{
return $this->id_pedido;
}

function getimpuesto_dpedido()
{
return $this->impuesto_dpedido;
}

function getdescuento_dpedidol()
{
return $this->descuento_dpedidol;
}

function getestado_dpedido()
{
return $this->estado_dpedido;
}

function getimpuesto_total_dpedido()
{
return $this->impuesto_total_dpedido;
}

function gettotal_dpedido()
{
return $this->total_dpedido;
}

// **********************
// SETTER METHODS
// **********************


function setid_dpedido($val)
{
$this->id_dpedido =  $val;
}

function setid_pedido($val)
{
$this->id_pedido =  $val;
}

function setimpuesto_dpedido($val)
{
$this->impuesto_dpedido =  $val;
}

function setdescuento_dpedidol($val)
{
$this->descuento_dpedidol =  $val;
}

function setestado_dpedido($val)
{
$this->estado_dpedido =  $val;
}

function setimpuesto_total_dpedido($val)
{
$this->impuesto_total_dpedido =  $val;
}

function settotal_dpedido($val)
{
$this->total_dpedido =  $val;
}

// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$sql =  "SELECT * FROM det_pedido WHERE id_dpedido = $id;";
$result =  $this->database->consulta($sql);
$result = $this->database->result;
$row = mysql_fetch_object($result);


$this->id_dpedido = $row->id_dpedido;

$this->id_pedido = $row->id_pedido;

$this->impuesto_dpedido = $row->impuesto_dpedido;

$this->descuento_dpedidol = $row->descuento_dpedidol;

$this->estado_dpedido = $row->estado_dpedido;

$this->impuesto_total_dpedido = $row->impuesto_total_dpedido;

$this->total_dpedido = $row->total_dpedido;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM det_pedido WHERE id_dpedido = $id;";
$result = $this->database->consulta($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->id_dpedido = ""; // clear key for autoincrement

$sql = "INSERT INTO det_pedido ( id_pedido,impuesto_dpedido,descuento_dpedidol,estado_dpedido,impuesto_total_dpedido,total_dpedido ) VALUES ( '$this->id_pedido','$this->impuesto_dpedido','$this->descuento_dpedidol','$this->estado_dpedido','$this->impuesto_total_dpedido','$this->total_dpedido' )";
$result = $this->database->consulta($sql);
$this->id_dpedido = mysql_insert_id($this->database->link);

}

// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE det_pedido SET  id_pedido = '$this->id_pedido',impuesto_dpedido = '$this->impuesto_dpedido',descuento_dpedidol = '$this->descuento_dpedidol',estado_dpedido = '$this->estado_dpedido',impuesto_total_dpedido = '$this->impuesto_total_dpedido',total_dpedido = '$this->total_dpedido' WHERE id_dpedido = $id ";

$result = $this->database->consulta($sql);



}


} // class : end

?>