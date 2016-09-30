<?php 

include('../logeo.php'); 
include('../extras/conexion.php');
$link=Conectarse();
if (!control_access("CALENDARIO", 'EDITAR')) { 
  $aErrores[]="USTED NO TIENE PERMISOS PARA REALIZAR ESTA ACCIÓN"; 
}
//generamos la consulta
$sql = "SELECT * FROM eventos";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($link, $sql)) die();

$clientes = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 
    $date=$row['date'];
    $title=$row['title'];
    $description=$row['description'];

    $arrayDate = explode("-", $date, 3);
    

    $clientes[] = array('date'=> $date, 'month'=> $arrayDate[1], 'day'=> $arrayDate[2], 'year'=> $arrayDate[0], 'title'=> $title, 'description'=> $description);

}
    
//desconectamos la base de datos
$close = mysqli_close($link) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

//Creamos el JSON
$json_string = json_encode($clientes);
echo $json_string;

//Si queremos crear un archivo json, sería de esta forma:

$file = 'clientes.json';
file_put_contents($file, $json_string);

    

?>