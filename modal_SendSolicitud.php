
<script src="assets/mobirise/js/fileinput.js" type="text/javascript"></script>

<div class="modal fade" id="myModal" role="dialog">


   <div class="modal-dialog modal-lg">
        
       <!-- Modal content-->
       <div class="modal-content">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Detalles de su solitud:</h4>
           </div>
           <div class="modal-body">
               <!-- page content -->
               <div class="page-title">
                   <div class="row facture">
                       <div class="col-md-10"> 
                           <ul class="listFacture"><strong>Tipo de Tramite:</strong>
                               <li><?=strtoupper($m_servicio_nombre)?></li>                         
                           </ul>                                  
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-12 col-sm-12 col-xs-12">
                           <div class="x_panel">
                               <div class="x_content">
                                   <!-- Smart Wizard -->
                                   <div class="x_content">
                                       <!-- up file -->
                                       <div class="row">
                                           <div id="wizard" class="swMain">
                                               <ul class="anchor">
                                                   <li>
                                                       <a href="#step-1" id="step1" class="selected" isdone="1" rel="1">
                                                           <span class="stepNumber">1</span>
                                                           <span class="stepDesc">
                                                                Recaudos<br>
                                                               <small>Agregar los recaudos del tramite</small>
                                                           </span>
                                                       </a>
                                                   </li>
                                                   <li>
                                                       <a href="#step-3" id="step2" class="disabled" isdone="0" rel="2">
                                                           <span class="stepNumber">2</span>
                                                           <span class="stepDesc">
                                                                Datos de envió<br>
                                                               <small>Agregar los datos para el envió</small>
                                                           </span>
                                                       </a>
                                                   </li>
                                                   <li>
                                                       <a href="#step-4" id="step3" class="disabled" isdone="0" rel="3">
                                                           <span class="stepNumber">3</span>
                                                           <span class="stepDesc">
                                                                Resumen<br>
                                                               <small>Detalle de su tramite</small>
                                                           </span>
                                                       </a>
                                                   </li>
                                               </ul>
                                           </div>
                                       </div>     

                                        
                                       <div class="row">
                                           <form name="formSolicitud" id="formSolicitud" method="POST" action="process/addSolicitud.php">
                                               <div id="step-1">   
                                                   <div class=" kv-main"> 

                                                       <input type="hidden" name="cantidadRecaudos" id="cantidadRecaudos" value="<?=$cantidadRecaudos?>">
                                                       <input type="hidden" name="idServicio" id="idServicio" value="<?=$idServicio?>">                                                             
                                                       <p><em>*Todos los recaudos son obligatorios y en formato  PDF<i class="fa fa-file-pdf-o" aria-hidden="true"></i></em></p>
                                                       <p><ol >
                                                        <?php 

                                                         $SQlRecaudos="SELECT * FROM r_recaudos_servicios AS S, m_recaudos as R WHERE S.r_recaudos_servicios_idServicio='$idServicio' AND  S.r_recaudos_servicio_idRecaudo=R.m_recaudo_id AND R.m_recaudo_estatus='1'";
                                                         $queryRecaudos=mysqli_query($link, $SQlRecaudos);
                                                         while ($rowRecaduos=mysqli_fetch_array($queryRecaudos)) {
                                                            $m_recaudo_nombre=$rowRecaduos["m_recaudo_nombre"];
                                                            $m_recaudo_descripcion=$rowRecaduos["m_recaudo_descripcion"];

                                                            ?>
                                                           <li><i class="fa fa-file-pdf-o" aria-hidden="true"></i><?=$m_recaudo_nombre?></li>
                                                           <?php } ?>
                                                       </ol></p>
                                                       <input type="hidden" name="idsFiles" id="idsFiles" value="">
                                                       <input id="archivos" multiple name="archivos[]" type="file" multiple data-min-file-count="1"  accept="application/pdf" data-upload-url="process/uploadMedia.php">
                                                       <div id="errorBlock" class="help-block"></div>

                                                       <hr>
                                                       <br>
                                                   </div>
                                               </div>


                                               <div id="step-2" class="col-md-9 col-md-offset-1" style="display: none;">
                                                   <p><em><i class="fa fa-plane" aria-hidden="true"></i> *Dirección donde desea recibir su tramite</em></p>   
                                                   <form>
                                                       <div class="form-group row">
                                                           <div class="col-sm-12">
                                                               <input type="text" class="form-control-registro" id="nombre" name="nombre" placeholder="Nombres">
                                                               <label class="has-warning control-label" id="errnombre" id="message" style="display: none;"></label>
                                                           </div>
                                                       </div>
                                                       <div class="form-group row">
                                                           <div class="col-sm-12">
                                                               <input type="text" class="form-control-registro" id="apellido" name="apellido" placeholder="Apellidos">
                                                               <label class="has-warning control-label" id="errapellido" id="message" style="display: none;"></label>
                                                           </div>
                                                       </div>
                                                       <div class="form-group row">
                                                           <div class="col-sm-3 col-xs-3">
                                                               <select class="form-control-registro" name="tipotelefono" id="tipotelefono">
                                                                   <option value="celular">Celular</option>
                                                                   <option value="casa">Casa</option>
                                                                   <option value="casa">Oficina</option>
                                                               </select>
                                                           </div>
                                                           <div class="col-sm-9 col-xs-9">
                                                               <input type="text" class="form-control-registro numeric" id="numtelefono" name="numtelefono" placeholder="Numero telefónico">
                                                               <label class="has-warning control-label" id="errtelf" id="message" style="display: none;"></label>
                                                           </div>
                                                       </div>
                                                       <div class="form-group row">
                                                           <div class="col-sm-12">
                                                               <input type="email" class="form-control-registro" id="correo" name="correo" placeholder="Correo electrónico">
                                                               <label class="has-warning control-label" id="errcorr" id="message" style="display: none;"></label>
                                                           </div>
                                                       </div>                 
                                                       <div class="form-group row">
                                                           <div class="col-sm-12">
                                                               <select id="country" class="form-control-registro" name="country" title="País de residencia"><!-- countries -->
                                                                   <option value=" " disabled selected>País</option>
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
                                                               <label class="has-warning control-label" id="errcountry" id="message" style="display: none;"></label>
                                                           </div>
                                                       </div>
                                                       <div class="form-group row">
                                                           <div class="col-sm-12">
                                                               <input type="text" class="form-control-registro numeric" id="codigo" placeholder="Código Postal">
                                                               <label class="has-warning control-label" id="errcod" id="message" style="display: none;"></label>
                                                           </div>
                                                       </div>
                                                       <p><em><i class="fa fa-map-marker" aria-hidden="true"></i> *Debe colocar la dirección exacta</em></p>
                                                       <div class="form-group row">
                                                           <div class="col-sm-12">
                                                               <input type="text" class="form-control-registro" id="direccion" name="direccion" placeholder="Dirección">
                                                               <label class="has-warning control-label" id="errdirc" id="message" style="display: none;"></label>
                                                           </div>
                                                       </div>
                                                   </div>


                                                   <div id="step-3" class="content" style="display: none;">
                                                       <div class="col-md-9 col-md-offset-1">
                                                           <div class="panel panel-default">
                                                               <div id="mensajesx"></div>
                                                               <div class="panel-heading">
                                                                   <p><em><i class="fa fa-wpforms" aria-hidden="true"></i> Detalle de su tramite</em></p> 
                                                               </div>
                                                               <div class="panel-body">
                                                                   <div class="row">
                                                                       <div class="col-md-4"><strong>Tipo de tramite</strong></div>
                                                                   </div>
                                                                   <div class="row">
                                                                       <div class="col-md-4"><?=strtoupper($m_servicio_nombre)?></div>
                                                                   </div>
                                                                   <hr><p><strong> Datos del envio<i class="fa fa-envelope-o" aria-hidden="true"></i></strong></p>
                                                                   <div class="row factureTop">
                                                                       <div class="col-md-4"><strong> Nombres:</strong></div>
                                                                       <div class="col-md-4"><strong>Apellidos:</strong></div>
                                                                       <div class="col-md-4"><strong>Telefono de contacto:</strong></div> 
                                                                       <div class="col-md-4"><input type="text" name="nameFinal" id="nameFinal" class="invisibble" readonly> </div>
                                                                       <div class="col-md-4"><input type="text" name="lastnameFinal" id="lastnameFinal" class="invisibble" readonly></div>
                                                                       <div class="col-md-4"><input type="text" name="numberFinal" id="numberFinal" class="invisibble" readonly></div>
                                                                   </div>
                                                                   <div class="row factureTop">
                                                                       <div class="col-md-4"><strong> Correo Electrónico:</strong></div>
                                                                       <div class="col-md-4"><strong> País:</strong></div>
                                                                       <div class="col-md-4"><strong> Codigo Postal:</strong></div> 
                                                                       <div class="col-md-4"><input type="text" name="mailFinal" id="mailFinal" class="invisibble" reandonly> </div>
                                                                       <div class="col-md-4"><input type="text" name="countryFinal" id="countryFinal" class="invisibble" reandonly> </div>
                                                                       <div class="col-md-4"><input type="text" name="postalcodeFinal" id="postalcodeFinal" class="invisibble" readonly> </div>
                                                                   </div>
                                                                   <div class="row factureTop">
                                                                       <div class="col-md-12"><strong> Dirección:</strong></div>
                                                                       <div class="col-md-12"><input type="text" name="addressFinal" id="addressFinal" class="invisibble" readonly></div>
                                                                   </div>
                                                                   <hr><p><strong> Recaudos<i class="fa fa-file-pdf-o" aria-hidden="true"></i></strong></p>

                                                                   <div class="row factureTop">

                                                                       <p>
                                                                           <ol id="filesGet">

                                                                           </ol>
                                                                           <button class="btn btn-lg btn-warning" id="botonLoading"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Cargando archivos...</button>

                                                                       </p>

                                                                   </div>
                                                                   <div class="row factureTop">
                                                                       <input type="text" name="recaudosFinal" id="recaudosFinal" class="invisible" style="color:#FFFFFF" >
                                                                   </div>
                                                                   <div class="row factureTop">
                                                                       <input type="text" name="cantidadRecaudosFinal" id="cantidadRecaudosFinal" class="invisible" style="color:#FFFFFF">
                                                                       <input type="text" size="1" name="filesUploaded" id="filesUploaded" class="invisible" style="color:#FFFFFF" >
                                                                   </div>
                                                               </div>
                                                               <!-- /.panel-body -->
                                                           </div>
                                                           <!-- /.panel -->
                                                       </div>
                                                   </div>




                                               </div>
                                               <label class="has-warning control-label" id="message" style="display: none;"></label>
                                               <div class="row swMain">
                                                   <div class="actionBar">
                                                       <div class="msgBox">
                                                           <div class="content">

                                                           </div>
                                                           <a href="#" class="close">X</a>
                                                       </div>
                                                       <div class="loader">Loading</div>
                                                       <button type="submit" class="buttonFinish buttonDisabled" id="confirmado">Confirmar</button>
                                                       <!--<button type="button" class="buttonNext" id="continuar" onClick="pasarData()" >Continuar</button> -->

                                                       <button type="button" id="buttonNext" class="buttonNext"  onClick="pasarFilesName(); uploadFiles();">Continuar</button>
                                                       <button type="button" id="buttonNext2" class="buttonNext"  onClick="pasarData(); " style="display: none;" >Continuar</button>

                                                     <!--  <button type="button" class="buttonPrevious buttonDisabled">Atras</button> -->
                                                   </div>
                                               </form>
                                           </div>

                                           <!-- End up file -->
                                       </div>                
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="modal-footer">
                   </div>
               </div>
           </div>  


       </div>
   </div>
   <script>
   var contador=0;
   $('#archivos').fileinput({
    'showPreview' : true,
    minFileCount:<?=$cantidadRecaudos?>,    
    maxFileCount:<?=$cantidadRecaudos?>,
    validateInitialCount: true,
    overwriteInitial: false,
    allowedFileExtensions : ['pdf', 'png','gif', 'jpg'],
    maxFilePreviewSize: 10240,
    browseOnZoneClick: true
});
   
   $('#archivos').on('fileuploaded', function(event, data, previewId, index) {
      var form = data.form, files = data.files, extra = data.extra,
      response = data.response, reader = data.reader;
      var cantidadRecaudos=<?=$cantidadRecaudos?>;
      contador++;


      $.each(response, function(index, val) {
        var input = $( "#idsFiles" );
        input.val( input.val() +","+ val );

    });
      if (cantidadRecaudos==contador) {

        document.getElementById('filesUploaded').value = 1;
        $("#confirmado").prop('disabled', false);
        $("#botonLoading").removeClass("btn-warning");  
        $("#botonLoading").addClass("btn-success");
        $('#botonLoading').html('Archivos Cargados <i class="fa fa-check" aria-hidden="true"></i>');
        

    } else{
        ("#confirmado").prop('disabled', true);
    }

})

   </script>

   <script type="text/javascript">
   $(function() {
     $("input:file").change(function (){
       var fileName = $(this).val();    

       $.map($('input:file').get(0).files, function(file) {
        $( "#filesGet" ).append( "<li>"+file.name+"</li>" );
    });
   });
 });
   </script>

   <script>

  // When the browser is ready...
  $(function() {

    // Setup form validation on the #register-form element
    $("#formSolicitud").validate({

        // Specify the validation rules
        rules: {
            nameFinal: "required",
            lastnameFinal: "required",
            docIdentidad: "required",
            numberFinal: {
                required: true,
                minlength: 11,
                maxlength:17,
            },
            mailFinal: {
                required: true,
                email: true
            },
            postalcodeFinal:"required",
            direccion:"required",
            countryFinal: {
                required: true,
            },
            nombre: "required",
            apellido: "required",
            numtelefono: {
                required: true,
                minlength: 11,
                maxlength:17,
            },
            correo: {
                required: true,
                email: true
            },
            codigo:"required",
            filesUploaded:"required",
            direccion:"required",
            country: {
                required: true,
            }, 
            recaudosFinal: "required",
            cantidadRecaudosFinal: {
                equalTo: '#cantidadRecaudos'
            }
        },

        // Specify the validation error messages
        messages: {
           nameFinal: "Los datos de envío están incompletos, debe especificar su nombre",
           lastnameFinal: "Los datos de envío están incompletos, debe especificar su apellido",
           numberFinal: {
            required: "Debe introducir un número telefónico",
            minlength: "El número debe tener al menos 11 dígitos",
            maxlength: "El número NO debe tener mas de 17 dígitos"
        },
        mailFinal: "Se requiere un Email válido",
        direccion: "Debe especificar su dirección exacta",
        postalcodeFinal:"Debe indicar su dirección",
        countryFinal: {
            countryFinal: "Debe seleccionar su país"
        },
        nombre: "Los datos de envío están incompletos, debe especificar su nombre",
        apellido: "Los datos de envío están incompletos, debe especificar su apellido",
        numtelefono: {
            required: "Debe introducir un número telefónico",
            minlength: "El número debe tener al menos 11 dígitos",
            maxlength: "El número NO debe tener mas de 17 dígitos"
        },
        correo: "Se requiere un Email válido",
        direccion: "Debe especificar su dirección exacta",
        codigo:"Debe indicar su dirección",
        filesUploaded:"Sus archivos no se han terminado de cargar, por favor espere...",
        country: {
            country: "Debe seleccionar su país"
        }, 
        recaudosFinal:"Debe adjuntar los recaudos",
        cantidadRecaudosFinal: {
            required:"No ha adjuntado sus recaudos, por favor regrese al paso 1",
            equalTo: 'Sus recaudos están incompletos'
        }

    },

    submitHandler: function(form) {

        $("#confirmado").html('confirmando...');
        $("#confirmado").prop('disabled', true);

        setTimeout(function(){
            var formData = new FormData($("#formSolicitud")[0]);

            $.ajax({
                url: "process/addSolicitud.php",
                type: 'POST',
                data: formData,
                async: false,
                dataType: "json",
                processData: false,
                contentType: "application/json",
                success: function (data) {
                    if (data['success']) {
                        $("#mensajesx").css("z-index", "999");
                        $($("#mensajesx").html("<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' id='cerrar'>&times;</a><div id='dataMessage'></div></div>").fadeIn("slow"));
                        $('#dataMessage').append(data['data']['message']);
                        setTimeout(function() { $(".alert").alert('close'); $("#mensajesx").css("z-index", "-1");}, 3000);
                        setTimeout("location.href='myaccount.php';", 500);
                    } else{
                        $("#mensajesx").css("z-index", "999");
                        $.each(data['data']['message'], function(index, val) {
                            $($("#mensajesx").html("<div class='alert alert-error'><a href='#' class='close' data-dismiss='alert' id='cerrar'>&times;</a><div id='dataMessage'></div></div>").fadeIn("slow"));
                            $('#dataMessage').append(val+ '<br>');
                        });
                        console.log(data['data']['message']);
                        setTimeout(function() { $(".alert").alert('close'); $("#mensajesx").css("z-index", "-1");}, 2000);
                    };
                },
                error: function(data) {
                    $("#mensajesx").css("z-index", "999");
                    $($("#mensajesx").html("<div class='alert alert-error'><a href='#' class='close' data-dismiss='alert' id='cerrar'>&times;</a><div id='dataMessage'></div></div>").fadeIn("slow"));
                    $.each(data['data']['message'], function(index, val) {
                        $('#dataMessage').append(val+ '<br>');
                    });
                    setTimeout(function() { $(".alert").alert('close'); $("#mensajesx").css("z-index", "-1");}, 2000);
                },
                cache: false,
                contentType: false
            });}, 2000);
}
});

});


</script>
