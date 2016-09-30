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




if((isset($_POST["idevento"]))&&($_POST["idevento"]!="")){ 
	$idevento=strip_tags(htmlentities(mysqli_real_escape_string($link, $_POST["idevento"]))); 
}  else {
	$aErrores[]="NO SE HA RECIBIDO EL ID DE LA SOLICITUD";
}
if((isset($_POST["date"]))&&($_POST["date"]!="")){ 
	$date=strip_tags(htmlentities(mysqli_real_escape_string($link, $_POST["date"]))); 
}  else { 
	$aErrores[]="NO SE HA RECIBIDO LA FECHA"; 
}
if((isset($_POST["title"]))&&($_POST["title"]!="")){ 
	$title=strip_tags(htmlentities(mysqli_real_escape_string($link, $_POST["title"]))); 
}  else { 
	$aErrores[]="NO SE HA RECIBIDO EL TITULO"; 
}
if((isset($_POST["description"]))&&($_POST["description"]!="")){ 
	$description=strip_tags(htmlentities(mysqli_real_escape_string($link, $_POST["description"]))); 
}  else { 
	$aErrores[]="NO SE HA RECIBIDO LA DESCRIPCIÓN"; 
}

if(count($aErrores)==0) { 
	$query = "UPDATE eventos SET  date='$date', title='$title', description='$description' WHERE id='$idevento'";
	$resultado = mysqli_query($link, $query);
	//generamos la consulta
	$sql = "SELECT * FROM eventos";
mysqli_set_charset($link, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($link, $sql)) die();

$clientes = array(); //creamos un array
$eventos = array(); //creamos un array


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

//desconectamos la base de datos
$close = mysqli_close($link) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


//Creamos el JSON
$json_string = json_encode($clientes);
//echo $json_string;

//Creamos el JSON
$json_string2 = json_encode($eventos);
//echo $json_string;
//Si queremos crear un archivo json, sería de esta forma:

$file = '../../process/json/events.json';
file_put_contents($file, $json_string2);
if ($resultado) {
	$jsondata["success"] = true;
	$jsondata["data"] = array(
		'message' => "Solicitud Actualizada Exitosamente"
		);
} else {
	$jsondata["success"] = false;
	$jsondata["data"] = array(
		'message' => "ERROR - Ocurrió un error al intentar realizar la acción"
		);
}
echo json_encode($jsondata, JSON_FORCE_OBJECT);
}
else{ 
	$jsondata["success"] = false;
	$jsondata["data"] = array(
		'message' => $aErrores
		);
	echo json_encode($jsondata, JSON_FORCE_OBJECT);
}
?>