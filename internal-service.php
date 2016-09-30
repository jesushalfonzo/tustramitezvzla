<?php include('logueo.php');
include('extras/conexion.php');
$link=Conectarse();



if((isset($_GET["serv"]))&&($_GET["serv"]!="")){ $idServicio=strip_tags(htmlentities($_GET["serv"])); } else {echo "<script language='JavaScript'>parent.location.href='index.php';</script>";}
$idurl = $idServicio;

$SQL="SELECT * FROM m_servicios WHERE m_servicio_id='$idServicio'";
$query=mysqli_query($link, $SQL);
$row=mysqli_fetch_array($query);
$m_servicio_nombre=$row["m_servicio_nombre"];
$m_servicio_descripcion=$row["m_servicio_descripcion"];
$m_servicio_icono=$row["m_servicio_icono"];
$m_servicio_estatus=$row["m_servicio_estatus"];

if (!$m_servicio_estatus) {
    echo "<script language='JavaScript'>parent.location.href='index.php';</script>";
}


?>
<!DOCTYPE html>
<html>
<head>
   <?php
   include('common_head.php');
   ?>
   <link href="assets/mobirise/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
   <style type="text/css">
   .invisibble{
    border: none;
}
.error{
    color: red;
}
.fileinput-upload{
    display: none;
}
.glyphicon-refresh-animate {
    -animation: spin .7s infinite linear;
    -webkit-animation: spin2 .7s infinite linear;
}

@-webkit-keyframes spin2 {
    from { -webkit-transform: rotate(0deg);}
    to { -webkit-transform: rotate(360deg);}
}

@keyframes spin {
    from { transform: scale(1) rotate(0deg);}
    to { transform: scale(1) rotate(360deg);}
}
</style>
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
</section>

<section class="content-2 simple col-1 col-undefined mbr-parallax-background mbr-after-navbar" id="content5-92" style="background-image: url(image/ciudad_noche.jpg);">
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(0, 0, 0);"></div>
    <div class="container">
        <div class="row">
            <div>
                <div class="thumbnail">
                    <div class="caption">
                        <h1 class="text-title">SERVICIOS</h1>
                        <div><p>Profesionalidad y compromiso somos expertos en tramites... <br></p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container cnt-service">
    <div class="col-md-8 col-md-offset-1 col-xs-12">   
        <script type='text/javascript'>
         var m3_u = (location.protocol=='https:'?'https://www.tustramitesenvenezuela.com/adserver/www/delivery/ajs.php':'http://www.tustramitesenvenezuela.com/adserver/www/delivery/ajs.php');
         var m3_r = Math.floor(Math.random()*99999999999);
         if (!document.MAX_used) document.MAX_used = ',';
         document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
         document.write ("?zoneid=9");
         document.write ('&amp;cb=' + m3_r);
         if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
         document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
         document.write ("&amp;loc=" + escape(window.location));
         if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
         if (document.context) document.write ("&context=" + escape(document.context));
         if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
         document.write ("'><\/scr"+"ipt>");
     </script>
    </div>
</div>

<div class="container cnt-service">
    <div class="row">
        <div class="col-md-3 about-left"></div>
        <div class="col-md-9 col-md-9 about-right">
            <div class="about-top">
                <h3 class="mbr-header__text"><?=strtoupper($m_servicio_nombre)?></h3>
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="row">
                        <div class="mbr-article mbr-article--wysiwyg col-sm-8">
                            <p><?=$m_servicio_descripcion?></p>
                            <blockquote>
                                <p><em><i class="fa fa-folder-open" aria-hidden="true"></i> RECAUDOS:</em></p>
                                <ul>

                                    <?php 

                                    $SQlRecaudos="SELECT * FROM r_recaudos_servicios AS S, m_recaudos as R WHERE S.r_recaudos_servicios_idServicio='$idServicio' AND  S.r_recaudos_servicio_idRecaudo=R.m_recaudo_id AND R.m_recaudo_estatus='1'";
                                    $queryRecaudos=mysqli_query($link, $SQlRecaudos);
                                    $cantidadRecaudos=mysqli_num_rows($queryRecaudos);
                                    while ($rowRecaduos=mysqli_fetch_array($queryRecaudos)) {
                                        $m_recaudo_nombre=$rowRecaduos["m_recaudo_nombre"];
                                        $m_recaudo_descripcion=$rowRecaduos["m_recaudo_descripcion"];

                                        ?>

                                        <li><em>&nbsp; &nbsp; <?=$m_recaudo_nombre?></em></li>

                                        <?php } ?>
                                    </ul>


                                    <label><i class="fa fa-share-alt" aria-hidden="true"></i> Compartir:</label>
                                    <div class="addthis_inline_share_toolbox"></div>

                                    <h3 class="pago-title"><i class="fa fa-cc-paypal" aria-hidden="true"></i> | <i class="fa fa-plane" aria-hidden="true"></i></h3>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <section class="mbr-section" id="buttons1-115">
        <div class="mbr-section__container container mbr-section__container--middle">
            <div class="">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="mbr-buttons mbr-buttons--center">

                        <?php if (isset($idusuario))  { ?>
                        <button type="button" class="btn-default-service btn-rg btn btn-default" data-toggle="modal" data-target="#myModal"><i class="fa fa-cart-plus" aria-hidden="true"></i> Solicitar</button>
                        <?php } else { ?>
                        <button type="button" class="btn-default-service btn-rg btn btn-default" data-toggle="modal" data-target="#myModallogueo"><i class="fa fa-cart-plus" aria-hidden="true"></i> Solicitar</button>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Modal -->
            <?php include('modal_SendSolicitud.php'); ?>
            <!--/Modal-->
        </section>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                   
                   
                    <ul class="comentarios">
                        <li class="activeComent"><a href="#"><span class="icofb"></span>Comentarios</a></li>
                    </ul>

                    <div class="comentArtic">
                        <div class="fb-comments" data-href="http://www.tustramitesenvenezuela.com/internal-service.php?serv=<?php echo $idurl ?>" data-width="100%" data-numposts="5"></div>
                    </div>

                </div>
            </div>
        </div>

        <?php include('common_redes.php'); ?>

        <div class="container cnt-banner">
            <div class="col-md-8 col-md-offset-1 col-xs-12">
                <script type='text/javascript'>
                   var m3_u = (location.protocol=='https:'?'https://www.tustramitesenvenezuela.com/adserver/www/delivery/ajs.php':'http://www.tustramitesenvenezuela.com/adserver/www/delivery/ajs.php');
                   var m3_r = Math.floor(Math.random()*99999999999);
                   if (!document.MAX_used) document.MAX_used = ',';
                   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
                   document.write ("?zoneid=12");
                   document.write ('&amp;cb=' + m3_r);
                   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
                   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
                   document.write ("&amp;loc=" + escape(window.location));
                   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
                   if (document.context) document.write ("&context=" + escape(document.context));
                   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
                   document.write ("'><\/scr"+"ipt>");
               </script>
            </div>
        </div>


        <?php include('common_footer.php');?>

        <script src="assets/mobirise/js/fileinput.js"></script>

        
        <script type="text/javascript" src="assets/validate/jquery.numeric.min.js"></script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57c1d2796bd7ca41"></script>
        <script type="text/javascript">
        function pasarData(){
            
            document.getElementById('nameFinal').value = document.getElementById('nombre').value;
            document.getElementById('lastnameFinal').value = document.getElementById('apellido').value;
            document.getElementById('countryFinal').value = document.getElementById('country').value;
            document.getElementById('addressFinal').value = document.getElementById('direccion').value;
            document.getElementById('mailFinal').value = document.getElementById('correo').value;
            document.getElementById('numberFinal').value = document.getElementById('numtelefono').value;
            document.getElementById('postalcodeFinal').value = document.getElementById('codigo').value;

            

        }


        function pasarFilesName(){
           document.getElementById('recaudosFinal').value = document.getElementById('filesGet').innerHTML;
           

       }

       function uploadFiles(){
        $(".fileinput-upload").click();
        //setTimeout(function() { $("#formSolicitud").submit();}, 800);
    }

    
    </script>

    <script type="text/javascript">
    $(".numeric").numeric();
    $("#remove").click(
      function(e)
      {
        e.preventDefault();
        $(".numeric").removeNumeric();

    }
    );

    </script>

  <script type="text/javascript">
    $(document).ready(function(){  
        var count = 0;
        var countPrev = 0;  

        $("#buttonNext").click(function(event) {
            var file = $("#archivos").val();
            var cantidadRecaudos = $("#cantidadRecaudos").val();

           var filesCount = $("#filesGet").children().length;
          // alert(filesCount);
           document.getElementById('cantidadRecaudosFinal').value = filesCount;

            if (!file =="" && filesCount == cantidadRecaudos) {
                count = 1;
                $("#message").empty();
                $("#buttonNext").hide();
                $("#buttonNext2").show();
                nextsolicitud(count);
            }else{
                $("#message").show("fast");
                $("#message").empty();
                $("#message").append("* Debe adjuntar la cantidad exacta de recaudos requeridos para su solicitud.");
                
            }

        });

        $( "#buttonNext2" ).click(function() {
            var nombre = $("#nombre").val();        
            var apellido = $("#apellido").val();
            var telef = $("#numtelefono").val();
            var correo = $("#correo").val();
            var country = $("#country").val();
            var codigo = $("#codigo").val();
            var direccion = $("#direccion").val();
            var email = false;
            var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

            if (nombre == "") {
                $("#nombre").focus();
                $("#errnombre").show("fast");
                $("#errnombre").empty();
                $("#errnombre").append("* Debe colocar un nombre de contacto");
                $("#errnombre").fadeIn(300).delay(1500).fadeOut(1600);
                return false;
            }
            else {
                if (apellido =="") {
                    $("#errapellido").show("fast");
                    $("#apellido").focus();
                    $("#errapellido").empty();
                    $("#errapellido").append("* Debe colocar el pellido de contacto");
                    $("#errapellido").fadeIn(300).delay(1500).fadeOut(1600);
                    return false;

                }else{
                    if (telef == "") {
                        $("#errtelf").show("fast");
                        $("#numtelefono").focus();
                        $("#errtelf").empty();
                        $("#errtelf").append("* Debe colocar un número telefonico de contacto");
                        $("#errtelf").fadeIn(300).delay(1500).fadeOut(1600);
                        return false;
                    }else {
                        if (!regex.test($('#correo').val().trim()) || correo=="") {
                            $("#errcorr").show("fast");
                            $("#correo").focus();
                            $("#errcorr").empty();
                            $("#errcorr").append("* Debe colocar un correo valido");
                            $("#errcorr").fadeIn(300).delay(1500).fadeOut(1600);
                            return false;
                        }else{
                            if (country =="") {
                                $("#errcountry").show("fast");
                                $("#country").focus();
                                $("#errcountry").empty();
                                $("#errcountry").append("* Debe seleccionar el país de envío");
                                $("#errcountry").fadeIn(300).delay(1500).fadeOut(1600);
                                return false;
                            }else{
                                if (codigo == "") {
                                    $("#errcod").show("fast");
                                    $("#codigo").focus();
                                    $("#errcod").empty();
                                    $("#errcod").append("* Debe colocar el codigo postal de la ciudad para el envío");
                                    $("#errcod").fadeIn(300).delay(1500).fadeOut(1600);
                                    return false;
                                }else{
                                    if (direccion =="") {
                                        $("#errdirc").show("fast");
                                        $("#direccion").focus();
                                        $("#errdirc").empty();
                                        $("#errdirc").append(" debe colocar la dirección exacta para el envío de su solicitud");
                                        $("#errdirc").fadeIn(300).delay(1500).fadeOut(1600);
                                        return false;
                                    }else{
                                        count = 2;
                                        $("#message").empty();
                                        nextsolicitud(count);
                                    }

                                }

                            }

                        }
                    }

                }

            }
        });

        var nextsolicitud = function(count){
            $(".buttonNext").addClass( "buttonNext"+count );
            $(".buttonPrevious").attr('id', count);
            var contentPanelId = jQuery(this).attr("id");
            switch (true) {
                case (count == 1):
                $( "#step2" ).addClass( "selected" );
                $("#step2").removeClass("disabled");
                $(".buttonPrevious").removeAttr('disabled');
                $(".buttonPrevious").removeClass("buttonDisabled");
                $("#step-1").css("display", "none");
                $("#step-2").css("display", "block");
                break;
                case (count == 2):
                $( "#step3" ).addClass( "selected" );
                $("#step3").removeClass("disabled");
                $( ".buttonNext" ).addClass( "buttonDisabled" );
                $(".buttonNext").attr('disabled','disabled');
                $("#step3").removeClass("disabled");
                $(".buttonFinish").removeClass("buttonDisabled");
                $("#step-2").css("display", "none");
                $("#step-3").css("display", "block");
                $(".facture").css("display", "none");

                break;
                case (count == 3):
                $( ".buttonNext" ).addClass( "buttonDisabled" );
                break;
                default:
            }

        }
    });
</script>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1431650570195026',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/es_ES/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.7&appId=1431650570195026";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>