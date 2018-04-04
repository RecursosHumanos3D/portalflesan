 <?php
use yii\helpers\Html;
use yii\helpers\Url;

$session = Yii::$app->session;
        $rutColaborador = $session['rut'];
?>
<style type="text/css">
.sidenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0; /* Stay at the top */
    right: 0;
    background-color: #fff; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

            /* When you mouse over the navigation links, change their color */
        .sidenav a:hover {
            color: #f1f1f1;
        }
        .sidenav {
            right: 0;
        }

        /* Position and style the close button (top right corner) */
        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
        #main {
            transition: margin-left .5s;
            padding: 20px;
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
        </style>


        <script type="text/javascript">
            function openNav() {
            document.getElementById("mySidenav").style.width = "21%";
            document.getElementById("barrita").onclick  = closeNav;
            }

            /* Set the width of the side navigation to 0 */
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("barrita").onclick  = openNav;
            }
        </script>

        <div id="mySidenav" class="sidenav">
                          <div class="container-fluid">
                           
                                             <div>
                                                <a class="centrador" title="Cerrar" href="javascript:void(0)"  onclick="closeNav()"><i class="far fa-times-circle"></i>&nbsp;&nbsp;Cerrar</a>
                                
                                <br><br>
                                <?= Html::a('<i class="fa fa-home"></i>&nbsp;&nbsp;Inicio', ['colaborador/perfil', 'rutColaborador' => $rutColaborador], ['class'=>'centrador','title' => 'Inicio' ]) ?>
                                <br> <br>
                                <?= Html::a('<i  class="fa fa-user"></i>&nbsp;&nbsp;Perfil', ['colaborador/compadre', 'rutAmigo' => $rutColaborador],['class' => 'centrador', 'title' => 'Perfil']) ?>
                               

                                <br> <br>
                                <a class="centrador" title="Personas" href="index.php?r=colaborador/amigos"><i class="fas fa-users" aria-hidden="true"></i>&nbsp;&nbsp;Personas</a>
                                <br> <br>
                                <a class="centrador" title="Grupos ¡Pronto!" href="#"><i class="far fa-dot-circle" aria-hidden="true"></i>&nbsp;&nbsp;Grupos <span class="badge" id="pronto">¡Pronto!</span></a>
                                  <hr>
                                <a class="centrador" title="Biblioteca" href="index.php?r=colaborador/biblioteca"><i class="far fa-dot-circle" aria-hidden="true"></i>&nbsp;&nbsp;Biblioteca</a>
                                <hr>
                                <a class="centrador" title="Recursos Humanos" href="#demo22" data-toggle="collapse"><i class="far fa-dot-circle" aria-hidden="true"></i>&nbsp;&nbsp;RRHH (+)</a>
                              
                                <div id="demo22" class="collapse">
                               <br>
                                <?= Html::a('<i class="far fa-handshake"></i> Beneficios', ['colaborador/convenios'], ['class'=>'centradorss','title'=>'Beneficios' ]) ?>                         
                                <br>
                                <?= Html::a('<i class="far fa-star"></i> Puntos', ['colaborador/beneficios', 'rutAmigo' => $rutColaborador],['class' => 'centradorss','title'=>'Mis Puntos Flesan']) ?>
                                <br>
                                <a class="centradorss" title="Clima ¡Pronto!" href="#"><i class="fas fa-sun"></i> Clima<span class="badge" id="pronto">¡pronto!</span></a>
                                <br> 
                                <a class="centradorss" title="Desempeño ¡Pronto!" href="#"><i class="fas fa-chart-line"></i> Desempeño<span class="badge" id="pronto">¡pronto!</span></a>
                                <br> 
                                <a class="centradorss" title="Capacitación ¡Pronto!" href="#"><i class="fas fa-graduation-cap"></i> Capacitación<span class="badge" id="pronto">¡pronto!</span></a>
                                <br> 
                                <a class="centradorss" title="Inducción ¡Pronto!" href="#"><i class="fas fa-book"></i> Inducción<span class="badge" id="pronto">¡pronto!</span></a>
                                <br> 
                                <a class="centradorss" title="Go Integro" target="_blank" href="https://flesan.gointegro.com/gosocial/company/stream"><i class="fas fa-ticket-alt"></i> Convenios (Go Integro)</a>                                
                                <br> 
                                <a class="centradorss" title="Movilidad ¡Pronto!" href="#"><i class="fas fa-child"></i> Movilidad<span class="badge" id="pronto">¡pronto!</span></a>
                                <br> 
                                <a class="centradorss" title="Payroll" target="_blank" href="https://www.grupopayroll.com/webpay/loginap.aspx"><i class="far fa-copy"></i> Payroll</a>
                                <br> 
                                <a class="centradorss" title="Control IT" target="_blank" href="http://app.ctrlit.cl/ctrl/login/auth"><i class="fas fa-code-branch"></i> Control IT</a>
                             
                                </div>    
                                  <hr>
                                 
                                <a class="centrador" title="Operaciones" href="#demo11" data-toggle="collapse"><i class="far fa-dot-circle" aria-hidden="true"></i>&nbsp;&nbsp;Operaciones (+)</a>

                                <div id="demo11" class="collapse">
                                <br>
                                <a class="centradorss" title="Biwiser" target="_blank" href="https://www.biwiser.com/que-es-biwiser/"><i class="fas fa-cogs"></i> Biwiser</a>
                                <br> 
                                <a class="centradorss" title="Iconstruye" target="_blank" href="https://www.iconstruye.com/includes/default.aspx"><i class="far fa-building"></i> Iconstruye</a>
                                <br> 
                                <a class="centradorss" title="DEC" target="_blank" href="https://www.dec.cl/login.php"><i class="fas fa-briefcase"></i> DEC</a>
                                <br> 
                                <a class="centradorss" title="Canal de Denuncias" target="_blank" href="https://www.flesanteescucha.com/"><i class="fas fa-bullhorn"></i> Canal de denuncias</a>
                                <br> 
                                <a class="centradorss" title="Avance de Obra Flesan" href="#"><i class="far fa-arrow-alt-circle-right"></i> Avance Flesan<span class="badge" id="pronto">¡pronto!</span></a>
                                <br> 
                                <a class="centradorss" target="_blank" title="Avance de Obra DVC" href="https://sites.google.com/flesan.cl/planificaciondvc/planificaci%C3%B3n-y-control?authuser=0"><i class="far fa-arrow-alt-circle-right"></i> Avance DVC</a>                                
                              
                             
                                </div>    


                                <hr>
                                <a class="centrador" title="Preguntas Frecuentes" href="index.php?r=site/preguntas" ><i class="fas fa-question-circle" aria-hidden="true"></i>&nbsp;&nbsp;Preguntas frecuentes</a>


                                <br>
                             <!--   <a class="centrador" target="_blank" href="http://www.flesan.cl"><i class="fas fa-sun" aria-hidden="true"></i>&nbsp;Clima</a>
                                <br>
                                <a class="centrador" target="_blank" href="ttps://flesan.gointegro.com/gosocial/company/stream"><i class="fas fa-thumbs-up" aria-hidden="true"></i> &nbsp;GO Integro</a>
                                <br>
                                <a class="centrador" target="_blank" href="https://www.grupopayroll.com/webpay/loginap.aspx"><i class="far fa-file-alt" aria-hidden="true" ></i> &nbsp;Payroll</a>
                                <br>
                                <a class="centrador" target="_blank" href="https://www.biwiser.com/que-es-biwiser/"><i class="far fa-clipboard" aria-hidden="true"></i> &nbsp;Biwiser</a>

                                <br>
                                <a class="centrador" target="_blank" href="https://www.dec.cl/login.php"><i class="far fa-check-square" aria-hidden="true"></i>&nbsp;DEC</a>
                                <br>
                                <a class="centrador" target="_blank" href="https://www.iconstruye.com/includes/default.aspx"><i class="fas fa-shopping-cart" aria-hidden="true"></i>&nbsp;IConstruye</a>
                                <br>
                                <a class="centrador" target="_blank" href="https://www.flesanteescucha.com/"><i class="fas fa-ban" aria-hidden="true"></i> &nbsp;Canal de Denuncias</a>
                                <br>
                                <a class="centrador" target="_blank" href="https://www.flesan.cl/"><i class="fas fa-shield-alt" aria-hidden="true"></i> &nbsp;Control IT</a>
                            -->


                            </div>
                           
                          </div>
                          
                        </div>