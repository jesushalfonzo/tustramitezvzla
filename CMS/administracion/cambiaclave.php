<?php include('../logeo.php'); 
include('../extras/conexion.php');
$link=Conectarse();
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

            
            <div class="clearfix"></div>
             <div id="mensajes"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cambiar Clave <small><?=$nombre_completo?></small></h2>
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
                    <form data-parsley-validate class="form-horizontal form-label-left" name="formChangepassword" id="formChangepassword">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="login" >Login <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="login" id="login" readonly="readonly" class="form-control col-md-7 col-xs-12" value="<?=$loginusuario?>">
                          <input type="hidden" name="iduser" id="iduser" value="<?=$idusuario?>" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="claveactual">Clave Actual <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="claveactual" name="claveactual" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="clavenueva">Nueva Clave <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="clavenueva" name="clavenueva" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repiteclave">Repite Nueva Clave <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="repiteclave" name="repiteclave" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
   
                
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="button" onClick="document.location.href='../index2.php'" class="btn btn-primary">Cancelar</button>
                          <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>

                    </form>
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
<?php include("../common_libraries.php"); ?>


<script src="../js/validate/jquery.validate.js"></script>
    

    <script>
$(function() {

  $("#formChangepassword").validate({

    rules: {
      login: "required",
      claveactual: "required",
      clavenueva: "required",
      repiteclave: "required"
    },

    messages: {
      login: "El login NO puede estar vacío",
      claveactual: "Debe especificar su clave actual",
      clavenueva: "Debe especificar su nueva clave",
      repiteclave: "Debe repetir su nueva clave",
    },

    submitHandler: function(form) {

     var formData = new FormData($("#formChangepassword")[0]);
  

     $.ajax({
      url: "changePassword.php",
      type: 'POST',
      enctype: 'multipart/form-data',
      data: formData,
      async: false,
      contentType: "application/json",
      dataType: "json",
      success: function (data) {
       if (data['success']) {
        $("#mensajes").css("z-index", "999");
        $($("#mensajes").html("<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' id='cerrar'>&times;</a><div id='dataMessage'></div></div>").fadeIn("slow"));
        $('#dataMessage').append(data['data']['message']);
        setTimeout(function() { window.location.href = '../index2.php';}, 1000);
      } else{
        $("#mensajes").css("z-index", "999");
        $($("#mensajes").html("<div class='alert alert-error'><a href='#' class='close' data-dismiss='alert' id='cerrar'>&times;</a><div id='dataMessage'></div></div>").fadeIn("slow"));
        $.each(data['data']['message'], function(index, val) {
          $('#dataMessage').append(val+ '<br>');
        });
        setTimeout(function() { $(".alert").alert('close'); $("#mensajes").css("z-index", "-1");}, 2000);
        

      };

    },
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
      } ,
   cache: false,
   contentType: false,
   processData: false
 });

}
});

});


</script>

   

    

    
  </body>
</html>