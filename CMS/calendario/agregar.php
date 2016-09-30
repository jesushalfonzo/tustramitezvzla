<?php include('../logeo.php'); 
include('../extras/conexion.php');
$link=Conectarse();

if (!control_access("CALENDARIO", 'VER')) { 
  $aErrores[]="USTED NO TIENE PERMISOS PARA REALIZAR ESTA ACCIÓN"; 
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include("../common_head.php"); ?>

<!-- Ion.RangeSlider -->
<link href="../vendors/normalize-css/normalize.css" rel="stylesheet">
<link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
<link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
<!-- Bootstrap Colorpicker -->
<link href="../vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

<link href="../vendors/cropper/dist/cropper.min.css" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="../css/custom.css" rel="stylesheet">

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

          <div class="row">
            <div class="col-md-12">
              <!-- form date pickers -->
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Agregar Evento </h2>
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

                      <form action="" method="post" id="register-form" class="form-horizontal form-label-left" novalidate="novalidate">
                        <div class="form-group">                      
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                            <div id="mensajes" class="alert alert-info" role="alert" style="display: none;"></div>
                            <div id="mensajesError" class="alert alert-danger" role="alert" style="display: none;"></div>
                          </div>
                        </div>

                        <fieldset class="personal-information">
                          <div class="form-group">                      
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                              <input class="form-control has-feedback-left" id="month" name="month" placeholder="Fecha del evento" type="text"/>
                              <span class="fa fa-calendar  form-control-feedback left" aria-hidden="true"></span>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                              <input class="form-control has-feedback-left" type="text" id="title" name="title" placeholder="Titulo del evento" />
                              <span class="fa fa-text-height form-control-feedback left" aria-hidden="true"></span>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                              <textarea name="description" id="description" class="form-control has-feedback-left" id="" cols="30" rows="10" placeholder="Description"></textarea>
                              <span class="fa fa-pencil form-control-feedback left" aria-hidden="true"></span>
                            </div>
                          </div>   
                        </fieldset><!-- end fieldset personal information -->
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button id="registro-btn" type="submit" class="btn btn-success">Guardar</button>
                            <button type="button" id="cancelar" class="btn btn-primary">Cancelar</button>
                            
                          </div>
                        </div>    
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /form datepicker -->             
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <?php include("../common_footer.php"); ?>
      <!-- /footer content -->

      <!--LIBRERIAS COMUNES-->
      <?php include("../common_libraries.php"); ?>

      <!--LIBRERIAS INDIVIDUALES NO COMUNES-->
      <!-- FastClick -->
      <script src="../vendors/fastclick/lib/fastclick.js"></script>
      <!-- NProgress -->
    <!-- <!-- <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../js/moment/moment.min.js"></script>
    <script src="../js/datepicker/daterangepicker.js"></script>
    <!-- Ion.RangeSlider -->
    <script src="../vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="../vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <!-- jquery.inputmask -->
    <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- jQuery Knob -->
    <script src="../vendors/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- Cropper -->
    <script src="../vendors/cropper/dist/cropper.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../js/custom.js"></script> 

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
    $("document").ready(function(){


      $( "#cancelar" ).click(function() {
        $("#register-form")[0].reset();
      });

      $("#register-form").submit(function(){
        var data = {
          "action": "test"
        };
        data = $(this).serialize() + "&" + $.param(data);
        $.ajax({
          type: "POST",
          dataType: "json",
          url: "action.php", 
          data: data,
          success: function(data) {
            if (data['success']) {
              $("#register-form")[0].reset();
              $("#mensajes").css("z-index", "999");
              $('#mensajes').empty();
              $('#mensajes').html("Evento Guardado");
              $('#mensajes').show();
              $("#mensajes").html(data['data']['message']);
              setTimeout(function() {  $('#mensajes').fadeOut(1); $("#mensajes").css("z-index", "-1");}, 2000);
            } else{
              alert("ERROR");
              $('#mensajes').fadeOut();
              $( '#mensajesError' ).empty();
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