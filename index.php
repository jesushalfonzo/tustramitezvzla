<?php include('logueo.php'); ?>
<!DOCTYPE html>
<html>
<head>
<?php
include('common_head.php');

?>
<!-- calendario -->
<link rel="stylesheet" href="assets/calendario/css/style-personal.css">

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6&appId=1441268399520835";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php 
include('common_menu.php');

?>

<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar" id="header1-73" style="background-image: url(image/image_1.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left">
        <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(76, 105, 114);"></div>
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched">
                <div class="mbr-box__magnet mbr-box__magnet--center-left">
                    <div class="row">
                        <div class=" col-sm-6">
                            <div class="mbr-hero animated fadeInUp">
                                <h1 class="mbr-hero__text">TUS TRAMITES EN VENEZUELA</h1>
                                <p class="mbr-hero__subtext">Profesionalidad y Compromiso... <br></p>
                            </div>
                            <?php if (!isset($idusuario))  { ?>
                                <div class="mbr-buttons btn-inverse mbr-buttons--left">
                                    <button type="button" class="btn-registro mbr-buttons__btn btn-rg btn btn-lg animated fadeInUp delay btn-warning" data-toggle="modal" data-target="#myModallogueo">INGRESAR</button>
                                    <a class="_btn-registro mbr-buttons__btn btn btn-rg btn-lg btn-default animated fadeInUp delay" href="register.php">REGISTRARSE</a>
                                </div>

                                <?php } ?>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="mbr-arrow mbr-arrow--floating text-center">
            <div class="mbr-section__container container">
                <a class="mbr-arrow__link" href="#features1-75"><i class="glyphicon glyphicon-menu-down"></i></a>
            </div>
        </div>
    </div>
    <!-- modal de logueo -->
    <?php include("modal.php"); ?>
    <!-- Modal -->
<!-- end modal logueo -->
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="social-buttons2-84" style="background-color: rgb(240, 240, 240);">
    <div class="container cnt-banner">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8"><img src="image/publicad728x90.jpg" alt=""></div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="container" id="features1-75">
        <div class="row">
            <div class="section-header-services">
                <h2 class="dark-text">NOTICIAS</h2>
            </div>
        </div>
    </div>
    <div class="mbr-section__container container">
        <div class="mbr-header mbr-header--inline row cnt-news">
            <!-- Destacada -->
            <div class="col-xs-12 col-md-8 col-sm-8" id="destacada"></div>
            <!-- twitter -->
            <div class="col-xs-12 col-md-4 col-sm-4">
                <a class="twitter-timeline" href="https://twitter.com/Tustramitesenvz" data-widget-id="737246281807060992">Tweets por el @Tustramitesenvz.</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
        </div>
        <!-- Noticias secundarias -->
        <div class="row cnt-news-secundarias" id="secundarias"></div>
    </div>
    <div class="container cnt-banner">
        <div class="row">
            <div class="col-md-8 col-md-offset-1"><img src="image/publicad728x90.jpg" alt=""></div>
        </div>
    </div>
</section>

<div class="container cnt-service" id="features1-75">
    <div class="row">
        <div class="section-header-services">
            <h2 class="dark-text">EXPERTOS EN TRAMITES</h2>
            <h6>¿Eres Venezolano y te encuentras en el extranjero? 
                <br> Nosotros te apoyamos tramitando los documentos que necesites, con envio a cualquier lugar del planeta.
                <br> Ahorra tiempo y dinero nosotros lo tramitamos por ti...
            </h6>
        </div>
    </div>
</div>

<section class="content-2 col-4" style="background-color: rgb(255, 255, 255);">   
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3 focus-box">
                <div class="thumbnail">
                    <div class="image img-h-serv"><img class="undefined ico-service" src="image/_home-delivery-service.png"></div>
                    <div class="caption">
                        <div>
                            <h3 class="red-border-bottom">SERVICIOS</h3>
                            <p>Sed egestas urna quam, sit amet euismod ligula commodo vitae. Cras hendrerit quam est, non dapibus turpis porta in. Fusce viverra, lectus vitae dignissim interdum, erat leo egestas velit, eu tincidunt tellus eros a mauris.&nbsp;</p>
                        </div>
                        <p class="group"><a href="service.php" class="btn-rg btn btn-default">VER MÁS</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 focus-box">
                <div class="thumbnail">
                    <div class="image img-h-serv"><img class="undefined ico-service" src="image/shopping-store-cart-.png"></div>
                    <div class="caption">
                        <div>
                            <h3 class="red-border-bottom">SHOP</h3>
                            <p>Sed egestas urna quam, sit amet euismod ligula commodo vitae. Cras hendrerit quam est, non dapibus turpis porta in. Fusce viverra, lectus vitae dignissim interdum, erat leo egestas velit, eu tincidunt tellus eros a mauris. </p>
                        </div>
                        <p class="group"><a href="shop.php" class="btn-rg btn btn-default">VER MÁS</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 focus-box">
                <div class="thumbnail">
                    <div class="image img-h-serv"><img class="undefined ico-service" src="image/verified-contact.png"></div>
                    <div class="caption">
                        <div>
                            <h3 class="red-border-bottom">CONTACTO</h3>
                            <p>Sed egestas urna quam, sit amet euismod ligula commodo vitae. Cras hendrerit quam est, non dapibus turpis porta in. Fusce viverra, lectus vitae dignissim interdum, erat leo egestas velit, eu tincidunt tellus eros a mauris. </p>
                        </div>
                        <p class="group"><a href="contact.php" class="btn-rg btn btn-default">VER MÁS</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 focus-box">
                <div class="thumbnail">
                    <div class="image img-h-serv"><img class="undefined ico-service" src="image/text-document-information.png"></div>
                    <div class="caption">
                        <div>
                            <h3 class="red-border-bottom">GUÍA DE TRAMITES</h3>
                            <p>Sed egestas urna quam, sit amet euismod ligula commodo vitae. Cras hendrerit quam est, non dapibus turpis porta in. Fusce viverra, lectus vitae dignissim interdum, erat leo egestas velit, eu tincidunt tellus eros a mauris. </p>
                        </div>
                        <p class="group"><a href="ayuda.php" class="btn-rg btn btn-default">VER MÁS</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="social-buttons2-84" style="background-color: rgb(240, 240, 240);">
    <div class="mbr-section__container container">
        <div class="mbr-header mbr-header--inline row">
            <div class="col-sm-4">
                <h3 class="mbr-header__text">SÍGUENOS EN:</h3>
            </div>
            <div class="mbr-social-icons mbr-social-icons--style-1 col-sm-8">
                <a class="mbr-social-icons__icon socicon-bg-twitter" title="Twitter" target="_blank" href="https://twitter.com/Tustramitesenvz?ref_src=twsrc%5Etfw"><i class="socicon socicon-twitter"></i></a> 
                <a class="mbr-social-icons__icon socicon-bg-facebook" title="Facebook" target="_blank" href="https://www.facebook.com/tustramitesenvenezuela/"><i class="socicon socicon-facebook"></i></a> 
                <a class="mbr-social-icons__icon socicon-bg-google" title="Google+" target="_blank" href="https://plus.google.com/u/0/communities/110759346305879618909"><i class="socicon socicon-google"></i></a> 
                <a class="mbr-social-icons__icon socicon-bg-instagram" title="Instagram" target="_blank" href="https://www.instagram.com/tustramitesenvenezuela/"><i class="socicon socicon-instagram"></i></a> 
            </div>
        </div>
    </div>
</section>

<!-- calendar -->
<section>
    <div class="container">
        <!-- calendario -->                        
        <div class="row">
            <div class="col-lg-12 mbr-header mbr-header--inline">
                <h3 class="mbr-header__text text-center">CALENDARIO DE DÍAS NO LABORABLES EN VENEZUELA </h3>
                <br>
                <hr>
            </div>
        </div>
        <div class="row">
        <div class="col-md-6">
                <div class="calendar hidden-print">
                    <header>
                        <h2 class="month"></h2>
                        <a class="btn-prev" href="#."><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                        <a class="btn-next" href="#."><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </header>
                    <table>
                        <thead class="event-days">
                            <tr></tr>
                        </thead>
                        <tbody class="event-calendar">
                            <tr class="1"></tr>
                            <tr class="2"></tr>
                            <tr class="3"></tr>
                            <tr class="4"></tr>
                            <tr class="5"></tr>
                        </tbody>
                    </table>
                    <div class="list">
                        <div class="day-event" date-day="2" date-month="2" date-year="2016"  data-number="1">
                            <a href="#." class="close"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                            <h2 class="title">Lorem ipsum 1</h2>
                            <p>Lorem Ipsum är en utfyllnadstext från tryck- och förlagsindustrin. Lorem ipsum har varit standard ända sedan 1500-talet, när en okänd boksättare tog att antal bokstäver och blandade dem för att göra ett provexemplar av en bok.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-offset-1 col-md-5">
               <div class="fb-page" data-href="https://www.facebook.com/Tus-tr%C3%A1mites-en-Venezuela-718992711564456/?fref=ts" data-tabs="timeline" data-width="435" data-height="450" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Tus-tr%C3%A1mites-en-Venezuela-718992711564456/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Tus-tr%C3%A1mites-en-Venezuela-718992711564456/?fref=ts">Tus trámites en Venezuela</a></blockquote></div>
           </div>
        </div>
    </div>
</section>
<!-- end calendar -->

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="social-buttons1-87" style="background-color: rgb(255, 255, 255);">
    <div class="mbr-section__container container">
        <div class="mbr-header mbr-header--inline row">
            <div class="col-sm-4">
                <h3 class="mbr-header__text">Compartir: </h3>
            </div>
            <div class="mbr-social-icons col-sm-8">
                <div class="mbr-social-likes social-likes_style-1" data-counters="true">
                    <div class="mbr-social-icons__icon social-likes__icon facebook socicon-bg-facebook" title="Share link on Facebook">
                        <i class="socicon socicon-facebook"></i>
                    </div>
                    <div class="mbr-social-icons__icon social-likes__icon twitter socicon-bg-twitter" title="Share link on Twitter">
                        <i class="socicon socicon-twitter"></i>
                    </div>
                    <div class="mbr-social-icons__icon social-likes__icon plusone socicon-bg-google" title="Share link on Google+">
                        <i class="socicon socicon-google"></i>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('common_footer.php');?>


<script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
<script src="assets/masonry/masonry.pkgd.min.js"></script>
<script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/social-likes/social-likes.js"></script>

<script>
    function getFeedNewsBlock() {
        var url = 'http://www.lapatilla.com/site/feed/',
        props = { count: 4 };
        var total = 0;
        var limit = 3;
        $.jQRSS(url, props, function (newsFeed) {
            if (!newsFeed) return false;
            //  $.jQRSS.debug('[getFeedNewsBlock()]', newsFeed);
            
            for (var i = 0; i < newsFeed.entries.length; i++) {
                var entry = newsFeed.entries[i];

                var author = entry['author'] ? entry['author'] : "",
                categories = entry['categories'] ? entry['categories'] : new Array(),
                content = entry['content'] ? entry['content'] : "",
                contentSnippet = entry['contentSnippet'] ? entry['contentSnippet'] : "",
                link = entry['link'] ? entry['link'] : "",
                publishedDate = entry['publishedDate'] ? entry['publishedDate'] : "",
                title = entry['title'] ? entry['title'] : "";
                var firstimg = $(content).find('img:first').attr('src');
                var secondimg = $(content).find('img:last').attr('src');
                var imagenNoencontrada = "image/not-font.png";

                if (firstimg === undefined) {
                    firstimg = secondimg;
                }
                if (firstimg === undefined) {
                    firstimg = imagenNoencontrada
                }

                if (i == 0) {
                    var destacada ="<article class='important'><div class='wpImg'><img src='"+firstimg+"' width='425' height='750'><h2><a href='"+link+"' target='_blank'>"+title+"</a></h2></div></article>";
                    $('#destacada').append(destacada);
                }
                else if (total < limit) {
                    var secundarias = "<div class='col-xs-12 col-md-4 col-sm-4'><article><img src='"+firstimg+"'><h2><a href='"+link+"' target='_blank'>"+title+"</a></h2></article></div>";
                    $("#secundarias").append(secundarias);
                } else {
                    total = total + 1;
                }
            }

            //  $.jQRSS.debug("$.jQRSS.requests["+$.jQRSS.requests.length+"]:\t", $.jQRSS.requests);
        });
    }

    getFeedNewsBlock();
    
    function getObjectLength(obj) {
        if (typeof obj != "object") return false;
        var i = 0;
        for (x in obj) i++;
            return i;
    }
</script>


</body>
</html>