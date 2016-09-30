<!DOCTYPE html>
<html>
<head>

    <?php
    include('common_head.php');
    ?>

    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
</head>
<body>

    <?php 
    include('common_menu.php');
    ?>
    <div id="mensajes"></div>
    <section class="content-2 simple col-1 col-undefined mbr-parallax-background mbr-after-navbar" id="content5-92" style="background-image: url(image/ciudad_noche.jpg);">
        <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(0, 0, 0);"></div>
        <div class="container">
            <div class="row">
                <div>
                    <div class="thumbnail">
                        <div class="caption">
                            <h1 class="text-title"> <i class="fa fa-user-plus" aria-hidden="true"></i> REGISTRO</h1>
                            <div><p>Profesionalidad y compromiso somos expertos en tramites... <br></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container cnt-banner">
        <div class="row">
            <div class="col-md-7">
                <div class="section-header-services">
                    <h2 class="dark-text">EXPERTOS EN TRAMITES</h2>
                    <h6>¿Eres Venezolano y te encuentras en el extranjero? 
                        <br> Nosotros te apoyamos tramitando los documentos que necesites, con envio a cualquier lugar del planeta.
                        <br> Ahorra tiempo y dinero nosotros lo tramitamos por ti...
                    </h6>
                </div>  
                <!-- Banner 370 x 370 -->
                <div class="col-md-8 cnt-banner-370x370">
                    <img src="image/2.jpg" alt="">
                </div>
            </div>

            <!-- Formulario -->
            <form name="formRegusterUser" id="formRegusterUser">
                <div class="col-md-5 col-xs-12 col-sm-12" style="border-left: 1px solid darkblue ">

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <h3>Cuenta Personal</h3>
                            <p><em>* Todos los campos son obligatorios</em></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control-registro" id="nombre" name="nombre" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control-registro" id="apellido" name="apellido" placeholder="Apellido">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3 col-xs-3">
                            <select class="form-control-registro form-select" name="tipoDocumento">
                             <option value="ci">C.I</option>
                             <option value="rif">RIF</option>
                             <option value="pasaporte">Pasaporte</option>
                         </select>
                     </div>
                     <div class="col-sm-9 col-xs-9">
                        <input type="text" class="form-control-registro" id="docIdentidad" name="docIdentidad" placeholder="V-00000000">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 col-xs-3">
                        <select class="form-control-registro form-select" name="tipoTelefono">
                            <option value="Celular">Celular</option>
                            <option value="Casa">Casa</option>
                            <option value="Oficina">Oficina</option>
                        </select>
                    </div>
                    <div class="col-sm-9 col-xs-9">
                        <input type="tel" class="form-control-registro" id="numtelefonico" name="numtelefonico" placeholder='Número telefónico: +99(99)9999-9999)'>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <input type="email" class="form-control-registro" id="correoUsuario" name="correoUsuario" placeholder="Correo electrónico">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <input type="password" class="form-control-registro" id="passwordcliente" name="passwordcliente" placeholder="Cree su contraseña">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <input type="password" class="form-control-registro" id="repassword" name="repassword" placeholder="Confirme su contraseña">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <select id="country" class="form-control-registro" name="country" title="País de residencia" class="required"><!-- countries -->
                            <option disabled selected value="">País de residencia</option>
                            <option value="Afganistán">Afganistán</option>
                            <option value="Akrotiri">Akrotiri</option>
                            <option value="Albania">Albania</option>
                            <option value="Alemania">Alemania</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguila">Anguila</option>
                            <option value="Antártida">Antártida</option>
                            <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                            <option value="Antillas Neerlandesas">Antillas Neerlandesas</option>
                            <option value="Arabia Saudí">Arabia Saudí</option>
                            <option value="Arctic Ocean">Arctic Ocean</option>
                            <option value="Argelia">Argelia</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Ashmore andCartier Islands">Ashmore andCartier Islands</option>
                            <option value="Atlantic Ocean">Atlantic Ocean</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaiyán">Azerbaiyán</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahráin">Bahráin</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Bélgica">Bélgica</option>
                            <option value="Belice">Belice</option>
                            <option value="Benín">Benín</option>
                            <option value="Bermudas">Bermudas</option>
                            <option value="Bielorrusia">Bielorrusia</option>
                            <option value="Birmania Myanmar">Birmania Myanmar</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia y Hercegovina">Bosnia y Hercegovina</option>
                            <option value="Botsuana">Botsuana</option>
                            <option value="Brasil">Brasil</option>
                            <option value="Brunéi">Brunéi</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Bután">Bután</option>
                            <option value="Cabo Verde">Cabo Verde</option>
                            <option value="Camboya">Camboya</option>
                            <option value="Camerún">Camerún</option>
                            <option value="Canadá">Canadá</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Chipre">Chipre</option>
                            <option value="Clipperton Island">Clipperton Island</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoras">Comoras</option>
                            <option value="Congo">Congo</option>
                            <option value="Coral Sea Islands">Coral Sea Islands</option>
                            <option value="Corea del Norte">Corea del Norte</option>
                            <option value="Corea del Sur">Corea del Sur</option>
                            <option value="Costa de Marfil">Costa de Marfil</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Croacia">Croacia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Dhekelia">Dhekelia</option>
                            <option value="Dinamarca">Dinamarca</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egipto">Egipto</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="El Vaticano">El Vaticano</option>
                            <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Eslovaquia">Eslovaquia</option>
                            <option value="Eslovenia">Eslovenia</option>
                            <option value="España">España</option>
                            <option value="Estados Unidos">Estados Unidos</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Etiopía">Etiopía</option>
                            <option value="Filipinas">Filipinas</option>
                            <option value="Finlandia">Finlandia</option>
                            <option value="Fiyi">Fiyi</option>
                            <option value="Francia">Francia</option>
                            <option value="Gabón">Gabón</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Gaza Strip">Gaza Strip</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Granada">Granada</option>
                            <option value="Grecia">Grecia</option>
                            <option value="Groenlandia">Groenlandia</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haití">Haití</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungría">Hungría</option>
                            <option value="India">India</option>
                            <option value="Indian Ocean">Indian Ocean</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Irán">Irán</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Irlanda">Irlanda</option>
                            <option value="Isla Bouvet">Isla Bouvet</option>
                            <option value="Isla Christmas">Isla Christmas</option>
                            <option value="Isla Norfolk">Isla Norfolk</option>
                            <option value="Islandia">Islandia</option>
                            <option value="Islas Caimán">Islas Caimán</option>
                            <option value="Islas Cocos">Islas Cocos</option>
                            <option value="Islas Cook">Islas Cook</option>
                            <option value="Islas Feroe">Islas Feroe</option>
                            <option value="Islas Georgia del Sur y Sandwich del Sur">Islas Georgia del Sur y Sandwich del Sur</option>
                            <option value="Islas Heard y McDonald">Islas Heard y McDonald</option>
                            <option value="Islas Malvinas">Islas Malvinas</option>
                            <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
                            <option value="IslasMarshall">IslasMarshall</option>
                            <option value="Islas Pitcairn">Islas Pitcairn</option>
                            <option value="Islas Salomón">Islas Salomón</option>
                            <option value="Islas Turcas y Caicos">Islas Turcas y Caicos</option>
                            <option value="Islas Vírgenes Americanas">Islas Vírgenes Americanas</option>
                            <option value="Islas Vírgenes Británicas">Islas Vírgenes Británicas</option>
                            <option value="Israel">Israel</option>
                            <option value="Italia">Italia</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Jan Mayen">Jan Mayen</option>
                            <option value="Japón">Japón</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordania">Jordania</option>
                            <option value="Kazajistán">Kazajistán</option>
                            <option value="Kenia">Kenia</option>
                            <option value="Kirguizistán">Kirguizistán</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Laos">Laos</option>
                            <option value="Lesoto">Lesoto</option>
                            <option value="Letonia">Letonia</option>
                            <option value="Líbano">Líbano</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libia">Libia</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lituania">Lituania</option>
                            <option value="Luxemburgo">Luxemburgo</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia">Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malasia">Malasia</option>
                            <option value="Malaui">Malaui</option>
                            <option value="Maldivas">Maldivas</option>
                            <option value="Malí">Malí</option>
                            <option value="Malta">Malta</option>
                            <option value="Man, Isle of">Man, Isle of</option>
                            <option value="Marruecos">Marruecos</option>
                            <option value="Mauricio">Mauricio</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="México">México</option>
                            <option value="Micronesia">Micronesia</option>
                            <option value="Moldavia">Moldavia</option>
                            <option value="Mónaco">Mónaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Navassa Island">Navassa Island</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Níger">Níger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Noruega">Noruega</option>
                            <option value="Nueva Caledonia">Nueva Caledonia</option>
                            <option value="Nueva Zelanda">Nueva Zelanda</option>
                            <option value="Omán">Omán</option>
                            <option value="Pacific Ocean">Pacific Ocean</option>
                            <option value="Países Bajos">Países Bajos</option>
                            <option value="Pakistán">Pakistán</option>
                            <option value="Palaos">Palaos</option>
                            <option value="Panamá">Panamá</option>
                            <option value="Papúa-Nueva Guinea">Papúa-Nueva Guinea</option>
                            <option value="Paracel Islands">Paracel Islands</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Perú">Perú</option>
                            <option value="Polinesia Francesa">Polinesia Francesa</option>
                            <option value="Polonia">Polonia</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reino Unido">Reino Unido</option>
                            <option value="República Centroafricana">República Centroafricana</option>
                            <option value="República Checa">República Checa</option>
                            <option value="República Democrática del Congo">República Democrática del Congo</option>
                            <option value="República Dominicana">República Dominicana</option>
                            <option value="Ruanda">Ruanda</option>
                            <option value="Rumania">Rumania</option>
                            <option value="Rusia">Rusia</option>
                            <option value="Sáhara Occidental">Sáhara Occidental</option>
                            <option value="Samoa">Samoa</option>
                            <option value="Samoa Americana">Samoa Americana</option>
                            <option value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
                            <option value="San Marino">San Marino</option>
                            <option value="San Pedro y Miquelón">San Pedro y Miquelón</option>
                            <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
                            <option value="Santa Helena">Santa Helena</option>
                            <option value="Santa Lucía">Santa Lucía</option>
                            <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leona">Sierra Leona</option>
                            <option value="Singapur">Singapur</option>
                            <option value="Siria">Siria</option>
                            <option value="Somalia">Somalia</option>
                            <option value="Southern Ocean">Southern Ocean</option>
                            <option value="Spratly Islands">Spratly Islands</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Suazilandia">Suazilandia</option>
                            <option value="Sudáfrica">Sudáfrica</option>
                            <option value="Sudán">Sudán</option>
                            <option value="Suecia">Suecia</option>
                            <option value="Suiza">Suiza</option>
                            <option value="Surinam">Surinam</option>
                            <option value="Svalbard y Jan Mayen">Svalbard y Jan Mayen</option>
                            <option value="Tailandia">Tailandia</option>
                            <option value="Taiwán">Taiwán</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Tayikistán">Tayikistán</option>
                            <option value="TerritorioBritánicodel Océano Indico">TerritorioBritánicodel Océano Indico</option>
                            <option value="Territorios Australes Franceses">Territorios Australes Franceses</option>
                            <option value="Timor Oriental">Timor Oriental</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                            <option value="Túnez">Túnez</option>
                            <option value="Turkmenistán">Turkmenistán</option>
                            <option value="Turquía">Turquía</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Ucrania">Ucrania</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Unión Europea">Unión Europea</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistán">Uzbekistán</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <!--<option value="Venezuela">Venezuela</option>-->
                            <option value="Vietnam">Vietnam</option>
                            <option value="Wake Island">Wake Island</option>
                            <option value="Wallis y Futuna">Wallis y Futuna</option>
                            <option value="West Bank">West Bank</option>
                            <option value="World">World</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Yibuti">Yibuti</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabue">Zimbabue</option>
                        </select><!-- end countries -->
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <input type="text" class="form-control-registro" name="addressUser" id="addressUser" placeholder="Dirección">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn-color btn btn-primary btn-lg btn-block" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Registrando..." id="myButton">Continuar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('common_redes.php'); ?>


<div class="container cnt-banner">
    <div class="col-md-8 col-md-offset-1 col-xs-12"><img src="image/publicad728x90.jpg" alt=""></div>
</div>

<?php include('common_footer.php');?>


<script src="assets/validate/jquery.validate.js"></script>
<script type="text/javascript" src="assets/validate/validacionRIF.js"></script>

<script>

// When the browser is ready...
$(function() {

// Setup form validation on the #register-form element
$("#formRegusterUser").validate({

// Specify the validation rules
rules: {
    nombre: "required",
    apellido: "required",
    docIdentidad: "required",
    numtelefonico: {
        required: true,
        minlength: 11,
        maxlength:17,
    },
    correoUsuario: {
        required: true,
        email: true
    },
    passwordcliente: {
        required: true
// minlength: 6,
// notEqualTo: ['#nombre', '#apellido', '#correo']
},
repassword: {
    equalTo: '#passwordcliente'
},
addressUser:"required",
country: {
    required: true,
}
},

// Specify the validation error messages
messages: {
    nombre: "Debe especificar su nombre",
    apellido: "Debe especificar su apellido",
    docIdentidad: "Campo Obligatorio",
    numtelefonico: {
        required: "Debe introducir un número telefónico",
        minlength: "El número debe tener al menos 11 dígitos",
        maxlength: "El número NO debe tener mas de 17 dígitos"
    },
    correoUsuario: "Se requiere un Email válido",
    passwordcliente: {
        required: "Debe asignar una clave"
//minlength: "Su clave debe tener más de 6 digitos",
//notEqualTo:"SHIT"
},
repassword: {
    required:"Debe repetir su clave",
    equalTo: 'Sus claves no coninciden'
},
addressUser:"Debe indicar su dirección",
country: {
    required: "Debe seleccionar su país"
}

},

submitHandler: function(form) {

   var formData = new FormData($("#formRegusterUser")[0]);

   for (var pair of formData.entries()) {
    console.log(pair[0]+ ', ' + pair[1]); 
}


$.ajax({
    url: "process/addCliente.php",
    type: 'POST',
    data: formData,
    async: false,
    dataType: "json",
    processData: false,
    contentType: "application/json",
    success: function (data) {
      if (data['success']) {
        $("#mensajes").css("z-index", "999");
        $("#formRegusterUser")[0].reset();
        $($("#mensajes").html("<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' id='cerrar'>&times;</a><div id='dataMessage'></div></div>").fadeIn("slow"));
        $('#dataMessage').append(data['data']['message']);
        setTimeout(function() { $(".alert").alert('close'); $("#mensajes").css("z-index", "-1");}, 5000);
    } else{
        $("#mensajes").css("z-index", "999");
        $.each(data['data']['message'], function(index, val) {
            $($("#mensajes").html("<div class='alert alert-error'><a href='#' class='close' data-dismiss='alert' id='cerrar'>&times;</a><div id='dataMessage'></div></div>").fadeIn("slow"));
            $('#dataMessage').append(val+ '<br>');
        });
        setTimeout(function() { $(".alert").alert('close'); $("#mensajes").css("z-index", "-1");}, 2000);
    };

},
error: function(XMLHttpRequest, textStatus, errorThrown) { 
  alert("Status: " + textStatus); alert("Error: " + errorThrown); 
},
cache: false,
contentType: false
});






}
});

});


</script>

<script>(function($){validarRif('docIdentidad'); function validacionRif() {$.validator.addMethod('rif', function(value, element){value = value.toUpperCase();if (!/^[Vv]{1}[-]{1}[0-9]{8}[-]{1}[0-9]{1}$/.test(value))return false;else {return true;}}, 'Ingrese un rif válido.');}})(jQuery);</script>

</body>
</html>