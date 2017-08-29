<?php
header("Access-Control-Allow-Origin", "*");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
// get the HTTP method, path and body of the request
$method = $_SERVER['REQUEST_METHOD'];
// echo($method);



class BaseClass {

   function __construct($name, $email, $pass, $dateB, $dLeft, $years) {
       // print "En el constructor BaseClass\n";

        define('HOST','localhost'); //AQUI VA TU HOST
		define('USER','root');
		define('PASS','root');
		define('DBNAME','webapp');



		$this->createUser($name, $email, $pass, $dateB, $dLeft, $years);
		
       // $this->conexion();
   }





   private function createUser($name, $email, $pass, $dateB, $dLeft, $years){
   		echo($dateB);
		$mysqli = new mysqli(HOST, USER, PASS, DBNAME);

		
		// // $q = "SELECT * FROM data";
		$q = "INSERT INTO users (name, email, pass, dateB, dLeft, years) VALUES ('$name', '$email', '$pass', '$dateB', '$dLeft', '$years')";
		

		if( $mysqli->query($q) === TRUE ){
			echo "Vamos";	
		}else{
			echo "Error: " . $q . "<br>" . $mysqli->error;
		}




		// $encode = array();
		
		
		// if($mysqli){
		// 	if($resultado){
		// 		// echo "Kino1";
		// 		// $resultado = json_encode($resultado);
		// 		// echo $resultado;
		// 		while ($fila = mysqli_fetch_assoc($resultado)) {
		// 		    // echo("ID: ".$fila["id"]." Nombre: ".$fila["apellido"]." Fecha: ".$fila["fecha"]."\<br/>");
		// 		    $encode[] = $fila;
		// 		}

		// 		echo json_encode($encode);

		// 	}
		// }else{
		// 	echo "Error de conexion". $conn->connect_error;
		// }
	}


}





?>