<?php include('../logeo.php'); 
include('../extras/conexion.php');
$link=Conectarse();


//DATOS PARA EL BUSCADOR
$cantidadResultados=$_POST["cantidadMostrar"];
$producto=$_POST["producto"];
$estatus=$_POST["estatus"];
if((isset($_GET["producto"]))&&($_GET["producto"]!="")){ $producto=$_GET["producto"]; }


if (($cantidadResultados=="" AND ($producto==""))) {
  $SQL="SELECT * FROM m_ventas, m_productos, m_clientes WHERE  m_producto_id=m_venta_idProducto AND m_cliente_id=m_venta_idCliente  ORDER BY m_venta_fecha ASC, m_venta_estatus ASC LIMIT 0,20";
}
else{
  $SQL="SELECT * FROM m_ventas, m_productos, m_clientes WHERE  m_producto_id=m_venta_idProducto AND m_cliente_id=m_venta_idCliente AND m_venta_idCliente=m_cliente_id  ";
  if ($producto!="x") {
   $SQL.=" AND m_venta_idProducto ='$producto' ";
 }

 if ($estatus!='x') {
   $SQL.=" AND m_venta_estatus='$estatus'";
 }
 if ($cantidadResultados!="") {
   $SQL.=" LIMIT 0,$cantidadResultados";
 }
}
//echo $SQL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("../common_head.php"); ?>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <?php include("../common_menu.php");?>
      </div>

      <!-- top navigation -->
      <?php include("../common_topNavigation.php"); ?>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left" style="width:40%;">
              <h3>Ventas <small></small></h3>
            </div>
            <div id="mensajes"></div>
            <div class="title_right" style="width:80%;">
              <div class="col-md-12 col-sm-5 col-xs-12 form-group  top_search">

                <div class="container">
                  <div class="row">
                    <div id="filter-panel" class="collapse filter-panel">
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <form class="form-inline" role="form" action="listar.php"  method="post">
                            <div class="form-group">
                              <label class="filter-col" style="margin-right:0;" for="pref-perpage">Mostrar:</label>
                              <select id="pref-perpage" class="form-control" name="cantidadMostrar">
                                <option value="10" <?php if($cantidadResultados==10){ echo "selected='selected'";}?> >10</option>
                                <option value="20" <?php if($cantidadResultados==20){ echo "selected='selected'";}?> >20</option>
                                <option value="30" <?php if($cantidadResultados==30){ echo "selected='selected'";}?> >30</option>
                                <option value="40" <?php if($cantidadResultados==40){ echo "selected='selected'";}?> >40</option>
                                <option value="50" <?php if($cantidadResultados==50){ echo "selected='selected'";}?> >50</option>
                                <option value="60" <?php if($cantidadResultados==60){ echo "selected='selected'";}?> >60</option>
                                <option value="70" <?php if($cantidadResultados==70){ echo "selected='selected'";}?> >70</option>
                                <option value="80" <?php if($cantidadResultados==80){ echo "selected='selected'";}?> >80</option>
                                <option value="90" <?php if($cantidadResultados==90){ echo "selected='selected'";}?> >90</option>
                                <option value="100" <?php if($cantidadResultados==100){ echo "selected='selected'";}?> >100</option>
                                <option value="200" <?php if($cantidadResultados==200){ echo "selected='selected'";}?> >200</option>
                                <option value="300" <?php if($cantidadResultados==300){ echo "selected='selected'";}?> >300</option>
                                <option value="400" <?php if($cantidadResultados==400){ echo "selected='selected'";}?> >400</option>
                              </select>                                
                            </div> <!-- form group [rows] -->
                            <div class="form-group">
                              <label class="filter-col" style="margin-right:0;" for="pref-orderby">Estatus:</label>
                              <select id="pref-orderby" class="form-control" name="producto">
                                <option value="x"<?php if($producto=="x"){ echo "selected";} ?>>Todos</option>
                                <?php
                                $SQLpro="SELECT m_producto_id, m_producto_nombre FROM m_productos WHERE m_producto_estatus='1'";
                                $queryPro=mysqli_query($link, $SQLpro);
                                while ($rowPro=mysqli_fetch_array($queryPro)) {
                                  $m_producto_id=$rowPro["m_producto_id"];
                                  $m_producto_nombre=$rowPro["m_producto_nombre"];
                                  
                                  ?>
                                  <option value="<?=$m_producto_id?>"<?php if($producto==$m_producto_id){ echo "selected";} ?>><?=$m_producto_nombre?></option>
                                  <?php } ?>

                                </select>                                
                              </div> <!-- form group [order by] --> 


                              <div class="form-group">
                                <label class="filter-col" style="margin-right:0;" for="pref-orderby">Estatus:</label>
                                <select id="pref-orderby" class="form-control" name="estatus">
                                  <option value="x"<?php if($estatus=='x'){ echo "selected";} ?>>Todos</option>
                                  <option value="0" <?php if($estatus=='0'){  echo "selected"; } ?> >Pendiente</option>
                                  <option value="1"  <?php if($estatus=='1'){  echo "selected"; } ?> >Aprobado</option>
                                  <option value="2"  <?php if($estatus=='2'){  echo "selected"; } ?> >Cancelado</option>

                                </select>                                
                              </div> <!-- form group [order by] --> 
                              <div class="form-group">    

                                <button type="submit" id="buscando" class="btn btn-default filter-col">
                                  <span class="glyphicon glyphicon-search"></span> Buscar
                                </button>  
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>    
                      <button type="button" style="display:none;" class="btn btn-primary" id="buscador" data-toggle="collapse" data-target="#filter-panel">
                        <span class="glyphicon glyphicon-cog"></span> Buscador Avanzado
                      </button>
                    </div>
                  </div>

                </div> 
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Mostrando todas las ventas </h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <!-- start project list -->
                  <table class="table table-striped projects">
                   <thead>
                    <tr>
                      <th style="width: 1%">#</th>
                      <th style="width: 20%">Nombre del Producto</th>
                      <th>Précio</th>
                      
                      <th>Comprados</th>
                      <th>Disponibles</th>
                      <th>Total Venta</th>
                      <th>Comprador</th>
                      <th>Estatus</th>
                      <th style="width: 30%">#Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query=mysqli_query($link, $SQL);
                    while ($row=mysqli_fetch_array($query)) {
                      $m_producto_id=$row["m_producto_id"];
                      $m_producto_nombre=$row["m_producto_nombre"];
                      $m_producto_descripcion=$row["m_producto_descripcion"];
                      $m_producto_precio=$row["m_producto_precio"];
                      $m_producto_cantidad=$row["m_producto_cantidad"];
                      $m_producto_estatus=$row["m_producto_estatus"];
                      $m_venta_fecha=date("d/m/Y h:i:s", strtotime($m_venta_fecha));
                      $m_venta_estatus=$row["m_venta_estatus"];
                      $m_cliente_email=$row["m_cliente_email"];
                      $m_cliente_nombre=$row["m_cliente_nombre"];
                      $m_cliente_apellido=$row["m_cliente_apellido"];
                      $m_venta_cantidad=$row["m_venta_cantidad"];
                      $m_venta_id=$row["m_venta_id"];

                      $fechaHoy=date('Y-m-d H:i:s');


                      if ($m_venta_estatus) {
                        $status="Aprobada";
                        $clase="success";
                      } else {
                        $status="Sin Aprobar";
                        $clase="warning";
                      }
                      
                      $SQLVentas="SELECT SUM(m_venta_cantidad) AS vendidas FROM m_ventas WHERE m_venta_idProducto='$m_producto_id'";
                      $queryVentas=mysqli_query($link, $SQLVentas);
                      $rowVentas=mysqli_fetch_array($queryVentas);
                      $NumeroVentas=$rowVentas["vendidas"];
                      if (is_null($NumeroVentas)) {
                        $NumeroVentas=0;
                      }


                      ?>
                      <tr id="Producto<?=$m_producto_id?>">
                        <td>#</td>
                        <td>
                          <a><?=$m_producto_nombre?></a>
                        </td>
                        <td>
                          <ul class="list-inline">
                            <li>
                              € <?=$m_producto_precio?>
                            </li>


                          </ul>
                        </td>
                        
                        <td><?=$m_venta_cantidad?></td>
                        <td><?=$m_producto_cantidad-$NumeroVentas?></td>
                        <td>€ <?=$m_producto_precio*$m_venta_cantidad?></td>
                        <td><?=$m_cliente_nombre." ".$m_cliente_apellido?><br><small><?=$m_cliente_email?></small></td>
                        <td>
                          <button type="button" class="btn btn-<?=$clase?> btn-xs"><?=$status?></button>
                        </td>
                        <td>

                          <?php if (control_access("VENTAS", 'ELIMINAR')) { ?>
                          <button type="button" class="btn btn-info btn-xs" data-id="<?=$m_venta_id?>" data-accion="1" data-title="Seguro que desea aprobar esta venta?" data-trigger="focus" data-on-confirm="changeEstatus" data-toggle="confirmation" data-btn-ok-label="Sí" data-btn-cancel-label="Cancelar!" data-placement="top" title="Seguro que desea aprobar esta venta?" <?php if($m_venta_estatus){ echo "disabled"; } ?> > <i class="fa fa-check"></i> Aprobar Venta</button>
                          <?php } ?>

                          <?php if (control_access("VENTAS", 'ELIMINAR')) { ?>
                          <button type="button" class="btn btn-danger btn-xs" data-id="<?=$m_venta_id?>" data-accion="2" data-title="Seguro que desea cancelar esta venta?" data-trigger="focus" data-on-confirm="changeEstatus" data-toggle="confirmation" data-btn-ok-label="Sí" data-btn-cancel-label="Cancelar!" data-placement="top" title="Seguro que desea cancelar esta venta?" <?php if($m_venta_estatus){ echo "disabled"; } ?>>  <i class="fa fa-trash-o"> </i> Cancelar</button>
                          <?php } ?>


                        </td>
                      </tr>

                      <?php } ?>
                    </tbody>
                  </table>
                  <!-- end project list -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <?php include("../common_footer.php"); ?>
      <!-- /footer content -->
    </div>
  </div>

  <!--LIBRERIAS COMUNES-->
  <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="../js/custom.js"></script>

  <script src="../js/bootstrap-confirmation.min.js"></script>
  <script type="text/javascript">
  $( document ).ready(function() {
    $( "#buscador" ).click();
  });
  </script>

  <script>

  $('[data-toggle=confirmation]').confirmation();

  function changeEstatus(){

    var id = $(this).data('id');
    var accion = $(this).data('accion');


    $.ajax({
      url: "changeEstatus.php",
      type: 'GET',
      enctype: 'multipart/form-data',
      data: "idVenta="+id+"&estatus="+accion,
      async: false,
      contentType: "application/json",
      dataType: "json",
      success: function (data) {
        if (data['success']) {
          $( "#Producto"+id  ).slideUp();
          $("#mensajes").css("z-index", "999");
          $($("#mensajes").html("<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' id='cerrar'>&times;</a><div id='dataMessage'></div></div>").fadeIn("slow"));
          $('#dataMessage').append(data['data']['message']);
          setTimeout(function() { $(".alert").alert('close'); $("#mensajes").css("z-index", "-1"); $("#buscando").click(); }, 2000);
        }
        else{
          $("#mensajes").css("z-index", "999");
          $($("#mensajes").html("<div class='alert alert-error'><a href='#' class='close' data-dismiss='alert' id='cerrar'>&times;</a><div id='dataMessage'></div></div>").fadeIn("slow"));
          $('#dataMessage').append(data['data']['message']);
          $.each(data['data']['message'], function(index, val) {
            $('#dataMessage').append(val+ '<br>');
          });
          setTimeout(function() { $(".alert").alert('close'); $("#mensajes").css("z-index", "-1");}, 4000);
        }
      },
      error: function(data) {
       $("#mensajes").css("z-index", "777");
       $($("#mensajes").html("<div class='alert alert-error'><a href='#' class='close' data-dismiss='alert' id='cerrar'>&times;</a><div id='dataMessage'></div></div>").fadeIn("slow"));
       $('#dataMessage').append(data['data']['message']);
       $.each(data['data']['message'], function(index, val) {
        $('#dataMessage').append(val+ '<br>');
      });
       setTimeout(function() { $(".alert").alert('close'); $("#mensajes").css("z-index", "-1");}, 2000);
     },
     cache: false,
     contentType: false,
     processData: false

   });


};



</script>
</body>
</html>

