<?php 
include('../extras/conexion.php');
$link=Conectarse();
include("sendMailVenta.php");
header('Content-type: application/json; charset=utf-8');
$aErrores=array();
$jsondata = array();

if((isset($_POST["cantidadFinal"]))&&($_POST["cantidadFinal"]!="")){ $cantidadFinal=strip_tags(mysqli_real_escape_string($link, $_POST["cantidadFinal"])); } else {$aErrores[] = "Debe indicar la cantidad";}
if((isset($_POST["idProducto"]))&&($_POST["idProducto"]!="")){ $idProducto=strip_tags(htmlentities(mysqli_real_escape_string($link, $_POST["idProducto"]))); } else {$aErrores[] = "ERROR";}
if((isset($_POST["idCliente"]))&&($_POST["idCliente"]!="")){ $idCliente=strip_tags(htmlentities(mysqli_real_escape_string($link, $_POST["idCliente"]))); } else {$aErrores[] = "DEBE ESTAR REGISTRADO";}



$fechacompleta=date('Y-m-d H:i:s');


if(count($aErrores)==0) { 

	$query = "INSERT INTO m_ventas (m_venta_id, m_venta_idProducto, m_venta_idCliente, m_venta_cantidad, m_venta_estatus, m_venta_fecha) VALUES (Null, '$idProducto','$idCliente','$cantidadFinal','0','$fechacompleta')";
	$resultado = mysqli_query($link, $query);
	$lasid=mysqli_insert_id($link);

	if ($resultado) {


		//Envío la respuesta al Front para redirigir
		$jsondata["success"] = true;
		$jsondata["data"] = array(
			'message' => "Su compra ha sido registrada satisfactoriamente"
			);


		$SQLProducto="SELECT m_producto_nombre, m_producto_cantidad, m_producto_precio, m_cliente_email FROM m_productos,m_clientes WHERE m_producto_id='$idProducto' AND m_cliente_id = '$idCliente'";
		$queryPro=mysqli_query($link, $SQLProducto);
		$rowPro=mysqli_fetch_array($queryPro);
		$m_producto_nombre=$rowPro["m_producto_nombre"];
		$m_producto_cantidad=$rowPro["m_producto_cantidad"];
		$m_producto_precio=$rowPro["m_producto_precio"];
		$m_cliente_email=$rowPro["m_cliente_email"];

		sendMailCompra($m_cliente_email, $m_producto_nombre, $m_producto_precio, $cantidadFinal);


	} else {
		$jsondata["success"] = false;
		$jsondata["data"] = array(
			'message' => "Ocurrió un error, por favor revisar los campos"
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