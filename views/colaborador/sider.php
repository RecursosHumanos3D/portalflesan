 <?php
use yii\helpers\Html;
use yii\helpers\Url;
$session = Yii::$app->session;
        $rutColaborador = $session['rut'];
?>
   <div class="sidebar-nav-fixed affix">
                <div class="well">
 <div class="profile-info-left">






                             <div class="section" >
                                
                                <?= Html::a('<i class="fa fa-home"></i>&nbsp;&nbsp;Inicio', ['colaborador/perfil', 'rutColaborador' => $rutColaborador], ['class'=>'centrador', 'title'=>'Inicio' ]) ?>
                                <br> <br>
                                <?= Html::a('<i  class="fa fa-user"></i>&nbsp;&nbsp;Perfil', ['colaborador/compadre', 'rutAmigo' => $rutColaborador],['class' => 'centrador', 'title'=>'Perfil']) ?>
                               

                                <br> <br>
                                <a class="centrador" title="Personas" href="index.php?r=colaborador/amigos"><i class="fas fa-users" aria-hidden="true"></i>&nbsp;&nbsp;Personas</a>
                                <br> <br>
                                <a class="centrador" title="Grupos ¡Pronto!" href="#"><i class="far fa-dot-circle" aria-hidden="true"></i>&nbsp;&nbsp;Grupos <span class="badge" id="pronto">¡Pronto!</span></a>
                                  <hr>
                                <a class="centrador" title="Biblioteca" href="index.php?r=colaborador/biblioteca"><i class="far fa-dot-circle" aria-hidden="true"></i>&nbsp;&nbsp;Biblioteca</a>
                                <hr>
                                <a class="centrador" title="Recursos Humanos" href="#demo" data-toggle="collapse"><i class="far fa-dot-circle" aria-hidden="true"></i>&nbsp;&nbsp;RRHH (+)</a>
                              
                                <div id="demo" class="collapse">
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
                                 
                                <a class="centrador" title="Operaciones"  href="#demo1" data-toggle="collapse"><i class="far fa-dot-circle" aria-hidden="true"></i>&nbsp;&nbsp;Operaciones (+)</a>

                                <div id="demo1" class="collapse">
                                <br>
                                <a class="centradorss" title="Biwiser" target="_blank" href="https://www.biwiser.com/que-es-biwiser/"><i class="fas fa-cogs"></i> Biwiser</a>
                                <br> 
                                <a class="centradorss" title="Iconstruye" target="_blank" href="https://www.iconstruye.com/includes/default.aspx"><i class="far fa-building"></i> Iconstruye</a>
                                <br> 
                                <a class="centradorss" title="DEC" target="_blank" href="https://www.dec.cl/login.php"><i class="fas fa-briefcase"></i> DEC</a>
                                <br> 
                                <a class="centradorss" title="Canal de denuncias"  target="_blank" href="https://www.flesanteescucha.com/"><i class="fas fa-bullhorn"></i> Canal de denuncias</a>
                                <br> 
                                <a class="centradorss" title="Avance de Obra Flesan" href="https://sites.google.com/flesan.cl/gerenciatecnicaflesan-control/panel-principal"><i class="far fa-arrow-alt-circle-right"></i> Avance Flesan</a>
                                <br> 
                                <a class="centradorss" target="_blank" title="Avance de Obra DVC" href="https://sites.google.com/flesan.cl/planificaciondvc/planificaci%C3%B3n-y-control?authuser=0"><i class="far fa-arrow-alt-circle-right"></i> Avance DVC</a>                                
                              
                             
                                </div>    


                                <hr>
                                <a class="centrador" title="Preguntas Frecuentes"  href="index.php?r=site/preguntas" ><i class="fas fa-question-circle" aria-hidden="true"></i>&nbsp;&nbsp;Preguntas frecuentes</a>



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
                </div>
                <style type="text/css">
                    a.centradorss {
    color: #777777!important;
}
                </style>