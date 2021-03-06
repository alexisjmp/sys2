<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        cls_sucursal
* GENERATION DATE:  27.01.2018
* CLASS FILE:       /var/www/generator/generated_classes/class.cls_sucursal.php
* FOR MYSQL TABLE:  sucursal
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

class cls_sucursal
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $id_sucursal;   // KEY ATTR. WITH AUTOINCREMENT

var $rut_cliente;   // (normal Attribute)
var $direccion_sucursal;   // (normal Attribute)
var $comuna_sucursal;   // (normal Attribute)

var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function cls_sucursal()
{

$this->database = new MySQL();

}


// **********************
// GETTER METHODS
// **********************


function getid_sucursal()
{
return $this->id_sucursal;
}

function getrut_cliente()
{
return $this->rut_cliente;
}

function getdireccion_sucursal()
{
return $this->direccion_sucursal;
}

function getcomuna_sucursal()
{
return $this->comuna_sucursal;
}

// **********************
// SETTER METHODS
// **********************


function setid_sucursal($val)
{
$this->id_sucursal =  $val;
}

function setrut_cliente($val)
{
$this->rut_cliente =  $val;
}

function setdireccion_sucursal($val)
{
$this->direccion_sucursal =  $val;
}

function setcomuna_sucursal($val)
{
$this->comuna_sucursal =  $val;
}

// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$sql =  "SELECT * FROM sucursal WHERE id_sucursal = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = mysql_fetch_object($result);


$this->id_sucursal = $row->id_sucursal;

$this->rut_cliente = $row->rut_cliente;

$this->direccion_sucursal = $row->direccion_sucursal;

$this->comuna_sucursal = $row->comuna_sucursal;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM sucursal WHERE id_sucursal = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->id_sucursal = ""; // clear key for autoincrement

$sql = "INSERT INTO sucursal ( rut_cliente,direccion_sucursal,comuna_sucursal ) VALUES ( '$this->rut_cliente','$this->direccion_sucursal','$this->comuna_sucursal' )";
$result = $this->database->query($sql);
$this->id_sucursal = mysql_insert_id($this->database->link);

}

// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE sucursal SET  rut_cliente = '$this->rut_cliente',direccion_sucursal = '$this->direccion_sucursal',comuna_sucursal = '$this->comuna_sucursal' WHERE id_sucursal = $id ";

$result = $this->database->query($sql);



}


} // class : end

?>