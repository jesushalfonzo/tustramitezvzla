<?php
include('../logeo.php'); 
include('../extras/conexion.php');
$link=Conectarse();
header('Content-type: application/json; charset=utf-8');
if (!control_access("CALENDARIO", 'EDITAR')) { 
  $aErrores[]="USTED NO TIENE PERMISOS PARA REALIZAR ESTA ACCIÓN"; 
}
$clientes = array(); //creamos un array
$aErrores=array();
$jsondata = array();

if((isset($_POST["month"]))&&($_POST["month"]!="")){ 
	$month=strip_tags(htmlentities(mysqli_real_escape_string($link, $_POST["month"]))); 
} 
else {
	$aErrores[] = "Debe seleccionar una fecha";
}

//$jsondata["success"] = false;
$jsondata["data"] = array('message' => "Ha ocurrido un error al guardar los datos. Por favor intente mas tarde.");

if(count($aErrores)==0) { 

//generamos la consulta

	$query = "SELECT * FROM  `eventos` WHERE DATE =  '$month'";
	
	mysqli_set_charset($link, "utf8"); //formato de datos utf8




	$resultado = mysqli_query($link, $query);


	while($row = mysqli_fetch_array($resultado)) 
	{ 
		$idevento=$row['id'];
		$date=$row['date'];
		$title=$row['title'];
		$description=$row['description'];

		$arrayDate = explode("-", $date, 3);


		$clientes[] = array('idevento'=> $idevento, 'date'=> $date, 'month'=> $arrayDate[1], 'day'=> $arrayDate[2], 'year'=> $arrayDate[0], 'title'=> $title, 'description'=> $description);

	}

	if ($resultado) {
			//SI EXISTE SACOS SUS DATOS Y CREO LAS VARIABLES DE SESION 
		$jsondata["success"] = true;
		$jsondata["data"] =  $clientes;
	}	

}
else{
	$jsondata["success"] = false;
	$jsondata["data"] = array(
		'message' => $aErrores
		);
}

echo json_encode($jsondata, JSON_FORCE_OBJECT);

?>