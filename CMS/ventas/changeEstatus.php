<?php include('../logeo.php'); 
include('../extras/conexion.php');
$link=Conectarse();

header('Content-type: application/json; charset=utf-8');

$aErrores=array();
$jsondata = array();

if((isset($_GET["idVenta"]))&&($_GET["idVenta"]!="")){ $idVenta=strip_tags(htmlentities(mysqli_real_escape_string($link, $_GET["idVenta"]))); } else {$idVenta=0;}
if((isset($_GET["estatus"]))&&($_GET["estatus"]!="")){ $estatus=strip_tags(htmlentities(mysqli_real_escape_string($link, $_GET["estatus"]))); } else {$estatus=0;}


if (!control_access("VENTAS", 'ELIMINAR')) { 
	$aErrores[]="USTED NO TIENE PERMISOS PARA REALIZAR ESTA ACCIÓN"; 
}


if(count($aErrores)==0) { 

	$query = "UPDATE m_ventas SET m_venta_estatus='$estatus' WHERE m_venta_id='$idVenta' ";
	$resultado = mysqli_query($link, $query);
	if ($resultado) {

		$jsondata["success"] = true;
		$jsondata["data"] = array(
			'message' => "Se realizó correctamente "
			);


	} else {
		$jsondata["success"] = false;
		$jsondata["data"] = array(
			'message' => "ERROR - Ocurrió un error"
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