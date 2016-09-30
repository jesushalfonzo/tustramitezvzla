<?php
include('../logeo.php'); 
include('../extras/conexion.php');
$link=Conectarse();


header('Content-type: application/json; charset=utf-8');
$aErrores=array();
$jsondata = array();
if (!control_access("CALENDARIO", 'EDITAR')) { 
  $aErrores[]="USTED NO TIENE PERMISOS PARA REALIZAR ESTA ACCIÓN"; 
}


if((isset($_POST["month"]))&&($_POST["month"]!="")){ 
	$month=strip_tags(htmlentities(mysqli_real_escape_string($link, $_POST["month"]))); 
	$arrayFecha = explode("/", $month, 3);
} 
else {
	$aErrores[] = "Debe seleccionar una fecha";
}

if((isset($_POST["title"]))&&($_POST["title"]!="")){ 
	$title=strip_tags(htmlentities(mysqli_real_escape_string($link, $_POST["title"]))); 
} 
else {
	$aErrores[] = "Debe Agregar un titulo al evento";
}
if((isset($_POST["description"]))&&($_POST["description"]!="")){ 
	$description=strip_tags(htmlentities(mysqli_real_escape_string($link, $_POST["description"]))); 
} 
else {
	$aErrores[] = "Debe agregar una descripcion al evento";
}




$jsondata["success"] = false;
$jsondata["data"] = array('message' => "Ha ocurrido un error al guardar los datos. Por favor intente mas tarde.");

if(count($aErrores)==0) { 
	$query = "INSERT INTO eventos (date, title, description) VALUES('$month', '$title', '$description');";	
	$resultado = mysqli_query($link, $query);



//generamos la consulta
	$sql = "SELECT * FROM eventos";
mysqli_set_charset($link, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($link, $sql)) die();

$clientes = array(); //creamos un array
while($row = mysqli_fetch_array($result)) 
{ 
	$date=$row['date'];
	$title=$row['title'];
	$description=$row['description'];

	//formato a la fecha
	$date2 = date_create($date);
	$mes = date_format($date2, 'Y-n-j');
	$arrayDate = explode("-", $mes, 3);


	$clientes[] = array('mes'=>$mes, 'month'=> $arrayDate[1], 'day'=> $arrayDate[2], 'year'=> $arrayDate[0], 'title'=> $title, 'description'=> $description);

	$eventos["events"][] = array('mes'=>$mes,'month'=> $arrayDate[1], 'day'=> $arrayDate[2], 'year'=> $arrayDate[0], 'title'=> $title, 'description'=> $description);

}

//Creamos el JSON
$json_string = json_encode($eventos);
//echo $json_string;

//Si queremos crear un archivo json, sería de esta forma:

$file = '../../process/json/events.json';
file_put_contents($file, $json_string);

	if ($resultado) {
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