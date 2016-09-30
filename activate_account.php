<?php 
include("extras/conexion.php");
$link=Conectarse();

//GET USER DATA ACTIVATION
if((isset($_GET["user"]))&&($_GET["user"]!="")){ $user=strip_tags(htmlentities($_GET["user"])); } else {$aErrores[] = "Este usuario NO existe";}
if((isset($_GET["hash"]))&&($_GET["hash"]!="")){ $hash=strip_tags(htmlentities($_GET["hash"])); } else {$aErrores[] = "Este Usuario NO existe";}


//PARA VALIDAR SI EL USUARIO EXISTE EN LA BD
$SQL = "SELECT * FROM  m_clientes WHERE m_cliente_email='".mysqli_real_escape_string($link, $user)."' AND m_cliente_hash='".mysqli_real_escape_string($link, $hash)."'";
$query = mysqli_query($link, $SQL);
$row=mysqli_fetch_array($query);
$m_cliente_estatus=$row["m_cliente_estatus"];
$m_cliente_id=$row["m_cliente_id"];


if ($m_cliente_id=="") {
  $aErrores[]="Este Usuario no se encuentra registrado";
}

if ($m_cliente_estatus==1) {
  $aErrores[]="Este solicitud de activación ya caducó";
}


?>

<!DOCTYPE html>
<html>
<head>
 <?php include('common_head.php');?>

 
 
</head>
<body>

  <?php 
  include('common_menu.php');
  ?>
  <!-- modal de logueo -->

  <!-- Modal -->
  <?php include("modal.php"); ?>
  <!-- end modal logueo -->
</section>

<section class="content-2 simple col-1 col-undefined mbr-parallax-background mbr-after-navbar" id="content5-92" style="background-image: url(image/ciudad_noche.jpg);">
  <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(0, 0, 0);"></div>
  <div class="container">
    <div class="row">
      <div>
        <div class="thumbnail">
          <div class="caption">
            <h1 class="text-title"> <i class="fa fa-clock-o" aria-hidden="true"></i> TRAMITES EN TIEMPO RECORD...</h1>
            <div><p>Profesionalidad y compromiso somos expertos en tramites... <br></p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container-fluid cnt-banner">
  <div class="row">
    <div class="col-md-4 col-md-offset-1">
      <div class="section-header-services">
        <h2 class="dark-text">EXPERTOS EN TRAMITES</h2>
        <h6>¿Eres Venezolano y te encuentras en el extranjero? 
          <br> Nosotros te apoyamos tramitando los documentos que necesites, con envio a cualquier lugar del planeta.
          <br> Ahorra tiempo y dinero nosotros lo tramitamos por ti...
        </h6>
      </div>  
      <!-- Banner 370 x 370 -->
      <div class="col-md-8 cnt-banner-370x370">
        <img src="image/10.jpg" alt="">
      </div>
    </div>
    <div class="col-md-5 col-xs-12 col-sm-12" style="border-left: 1px solid darkblue ">
     <div class="card card-block">
      <h4 class="card-title">Resultado de la activación</h4>
      <p class="card-text">

        <?php
        if(count($aErrores)==0) { 

          $ssSQL = "UPDATE m_clientes SET m_cliente_estatus='1' WHERE m_cliente_id='$m_cliente_id'";
          $query = mysqli_query($link, $ssSQL);

          if ($query) {
            echo "Su cuenta ha sido activada satisfactoriamente, haga click en la parte superior derecha o vaya al inicio para iniciar sesión";

          } else {
            echo "Ocurrió un error. Pongase en contacto con el administrador del sitio";
          }


        }
        else{ 
          foreach ($aErrores as $error) {
            echo $error."<br>";
          }

        }
        ?> 

      </p>
    </div>
    

  </div>
</div>
</div>

<?php include('common_redes.php'); ?>

<div class="container cnt-banner">
  <div class="col-md-8 col-md-offset-1 col-xs-12"><img src="image/publicad728x90.jpg" alt=""></div>
</div>


<?php include('common_footer.php');?>

</body>
</html>