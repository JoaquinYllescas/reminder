<?php
require("./apiphp.php");

if($_REQUEST){

	$contenido = json_encode($_REQUEST);
	echo($contenido);

	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$pass = $_REQUEST['pass'];
	$dateB = $_REQUEST['dateB'];
	$dLeft = $_REQUEST['dLeft'];
	$years = $_REQUEST['years'];

	$a = new BaseClass($name, $email, $pass, $dateB, $dLeft, $years);


}else{
	echo("Los datos no llegan.");
}
	
// $a = new BaseClass();
// $a = new reminder();
// $a->conexion();
?>