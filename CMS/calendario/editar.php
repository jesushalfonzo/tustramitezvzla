<?php 
include('../logeo.php'); 
include('../extras/conexion.php');
$link=Conectarse();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include("../common_head.php"); ?>
    <link href="../../vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="../../vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../../vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="../../vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="../../vendors/cropper/dist/cropper.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">

<!-- Datapiker Calendar -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">

    <!-- Load jQuery and the validate plugin -->
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

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
              <div class="title_left">
                <h3>Calendario de Eventos</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" id="result">
              <div class="col-md-12">
                <!-- form buscar -->
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                      <h2>Buscar Evento </h2>
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
                        <br />
                        <form action="" method="post" id="register-form" novalidate="novalidate">
                           <div class="form-group">                      
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                              <div id="mensajes" class="alert alert-info" role="alert" style="display: none;"></div>
                              <div id="mensajesError" class="alert alert-danger" role="alert" style="display: none;"></div>
                            </div>
                          </div>
                          <div class="form-group">                      
                            <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-2">
                              <input class="form-control has-feedback-left" id="month" name="month" placeholder="DD/MM/YYYY" type="text"/>
                              <span class="fa fa-calendar  form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                              <button id="registro-btn" type="submit" class="btn btn-success">Buscar</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /form buscar --> 
                <!-- form editar -->
                                 <!-- /form editar -->            
              </div>
            </div>
            <div class="row" id="resultado" style="display: none;">
              <div class="col-md-12">
                <!-- form buscar -->
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                      <h2>Editar Evento</h2>
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
                        <br />

                        <div class="well" style="overflow: auto">
                          <div id="con-event"></div>

                          
                        </div>
                      </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /form buscar --> 
                <!-- form editar -->
                                 <!-- /form editar -->            
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
      <?php include("../common_libraries.php"); ?>

    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <!-- <!-- <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../js/moment/moment.min.js"></script>
    <script src="../js/datepicker/daterangepicker.js"></script>
    <!-- Ion.RangeSlider -->
    <script src="../../vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="../../vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <!-- jquery.inputmask -->
    <script src="../../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- jQuery Knob -->
    <script src="../../vendors/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- Cropper -->
    <script src="../../vendors/cropper/dist/cropper.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script> 

    <!-- Dataspiker -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
  $(document).ready(function(){
    var date_input=$('input[name="month"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
      format: 'yyyy/mm/dd',
      container: container,
      todayHighlight: true,
      autoclose: true,
    })
  })
</script>


<script type="text/javascript">

  function myFunction(idEvento) {
    var Id_evento = idEvento;
    var urlredirect = "editar_Evento.php?id="+Id_evento;
    window.location.replace(urlredirect);

  }

  function cerrarEvento(idevento) {
    var eventoClose = idevento;
    $("#"+eventoClose).css("display", "none");
  }
$("document").ready(function(){
  $("#register-form").submit(function(){
    var data = {
      "action": "test"
    };
    data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "buscar-editar.php", 
      data: data,
      success: function(data) {
        if (data['success']) {
          $("#register-form")[0].reset();
          $("#con-event").empty();
          $("#resultado").css("display","block");
          $.each(data['data'], function(index, val) {
            $('#con-event').append(
              '<div class="col-md-4" id="'+val.idevento+'"><div class="x_panel tile fixed_height_320"><div class="x_title"><h2>'+val.date+'</h2><ul class="nav navbar-right panel_toolbox"><li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li><li class="dropdown btn-edit"><a href="#" class="btn-edit dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" onclick="myFunction('+val.idevento+')"><i class="fa fa-edit"></i></a></li><li><a class="close-link" onclick="cerrarEvento('+val.idevento+')"><i class="fa fa-close"></i></a></li></ul><div class="clearfix"></div></div><div class="x_content"><div class="w_left w_25"><span>Titulo: </span></div><div class="w_center">'+val.title+'</div><br/><div class="w_left w_25"><span>Descripción: </span></div><div class="w_center">'+val.description+ '<div class="clearfix"></div></div></div></div>');
          });
        } else{
          $('#mensajes').fadeOut();
          $('#mensajesError').html("");
          $('#mensajesError').show();
          $('#mensajesError').fadeOut(10000);
          $.each(data['data']['message'], function(index, val) {
           $('#mensajesError').append(val+ '<br>');
         });
        };
      }
    });
    return false;
  });
});
</script>
  </body>
</html>