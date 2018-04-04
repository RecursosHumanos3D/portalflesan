<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;
use common\widgets\Alert;
use yii\bootstrap\Modal;

function encuentraColaborador($rutColaborador) {
    if (($model = \app\models\Colaborador::find()->where(['rutColaborador' => $rutColaborador])->all()) !== null) {

        return $model;
    } else {

        return $this->render('login', [
                    'model' => $model,
        ]);
    }
}

function encuentraAmigos($rutColaborador) {
    if (($model = \app\models\Dependencia::find()->where(['rutColaborador1' => $rutColaborador])->all()) !== null) {

        return $model;
    }
}

$session = Yii::$app->session;

if ($session->isActive) {
<<<<<<< HEAD

=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
    $rutColaborador = $session['rut'];
    $nombre = $session['nombreColaborador'];
    $apellidos = $session['apellidosColaborador'];
    $foto = $session['foto'];
}


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<<<<<<< HEAD
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        <!-- If you'd like to support IE8 -->
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
<<<<<<< HEAD

    <style>

        .navbar-principal .navbar-brand, .navbar-principal .navbar-brand li a:visited, .navbar-principal .navbar-nav li a {
        color: #777777!important;
        font-weight: 500;
        padding-top: 35px;
        font-size: 20px;
=======
    <style>


        .navbar-principal .navbar-brand, .navbar-principal .navbar-brand li a:visited, .navbar-principal .navbar-nav li a {
        color: #ffffff;
        font-weight: 500;
        padding-top: 35px;
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        }

        body {
            font-family: 'Roboto', sans-serif !important;
            background: #e4e4e4;
            overflow-x: hidden;
            margin-bottom: 60px;
        }

        .navbar-principal {
<<<<<<< HEAD
            background-color: #ffffff!important;
=======
            background-color: #343434!important;
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
            /* background-color: #9f9fa2; */
            border-color: rgba(202, 86, 67, 0.42);
            box-shadow: 0 2px 2px -2p xrgba(0, 0, 0, .52);*/
        }
<<<<<<< HEAD

         .navbar-principal .navbar-nav .open a, .navbar-principal .navbar-nav .open a:hover, .navbar-principal .navbar-nav li a:hover, .navbar-principal .navbar-nav li a:focus, .navbar-principal .navbar-nav .active a, .navbar-principal .navbar-nav .active a:hover {
            color: #777777!important;
                 background-color: #ffffff!important;
              
=======
         .navbar-principal .navbar-nav .open a, .navbar-principal .navbar-nav .open a:hover, .navbar-principal .navbar-nav li a:hover, .navbar-principal .navbar-nav li a:focus, .navbar-principal .navbar-nav .active a, .navbar-principal .navbar-nav .active a:hover {
            color: #fff;
                 background-color: #343434 !important;
                padding-top: 35px;
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        }
       
        a.navbar-brand {
            padding: 14px 8px!important;
        }
<<<<<<< HEAD

        div#fotol {
            max-height: 390px;
        }

        img#logo {
            width: 51%!important;
            margin-left: 13%!important;
            margin-top: -8.5%!important;
        }
        
        ul.nav.navbar-nav.navbar-right {
            color: #777777!important;
            background-color: none;
            margin-top: -38px!important;
        }

=======
        div#fotol {
            max-height: 390px;
        }
        img#logo {
            width: 114px;
            margin-top: -5px;
        }
        ul.nav.navbar-nav.navbar-right {
            color: #fff;
            background-color: #343434;
        margin-top: -40px!important;
            
        }
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        video#video2 {
            width: 100%;
            height: 480px;
        }
<<<<<<< HEAD

=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        .post .post-footer .comments-list .comment .avatar {
            width: 45px!important;
            height: 45px!important;
        }

        p#estado {
            word-wrap: break-word; 
        }


        p#elComentario {
            font-family: 'Roboto', sans-serif !important;
            font-size: 16px;
            font-weight: bold;
        }

<<<<<<< HEAD
        video::-internal-media-controls-download-button {
            display:none;
        }

        .file-actions {
            display: none;
        }

        textarea.form-control.input-lg.p-text-area {
            color: #000000!important;
        }

=======


        video::-internal-media-controls-download-button {
            display:none;
        }
        .file-actions {
            display: none;
        }
        textarea.form-control.input-lg.p-text-area {
            color: #000000!important;
        }
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        video::-webkit-media-controls-enclosure {
            overflow:hidden;
        }

<<<<<<< HEAD
=======

>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        video::-webkit-media-controls-panel {
            width: calc(100% + 30px); /* Adjust as needed */
        }

        @media only screen and (max-width : 768px) {
<<<<<<< HEAD
            .navbar-principal .navbar-brand, .navbar-principal .navbar-brand li a:visited, .navbar-principal .navbar-nav li a {
    color: #777777!important;
    font-weight: 500!important;
    padding-top: 8px!important;
    font-size: 13px!important;
    text-transform: capitalize!important;
}
            ul.nav.navbar-nav.navbar-right {
    color: #777777!important;
    margin-top: 3px!important;
    padding-right: 8%;
    padding-left: 8%;
}
                .navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border-color: #e7e7e7!important;
    background-color: white!important;
}
            button.navbar-toggle.collapsed {
                    background-color: #ffffff!important;
            }
            a.navbar-brand {
    padding: 0px 3px!important;
}

            span.icon-bar {
                background-color: #777777!important;
            }

            .navbar-header {
                 background-color: #ffffff!important;
=======
            button.navbar-toggle.collapsed {
                    background-color: #404040!important;
            }

            span.icon-bar {
                background-color: #fff;
            }

            .navbar-header {
                 background-color: #2e2e2e !important;
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
            }
            button.navbar-toggle.collapsed {
                background-color: #02398b;
            }

            span.icon-bar {
<<<<<<< HEAD
                background-color: #777777!important;
            }
        }
        
=======
                background-color: white!important;
            }
        }
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

        @media only screen and (max-width : 320px) {
            button.navbar-toggle.collapsed {
                background-color: #404040!important;
            }

            span.icon-bar {
                background-color: #fff;
            }

            .navbar-header {
                background-color: #14377d;
            }
            aside {
                width: 290px !important; 
<<<<<<< HEAD
                max-width: 290px;
            } 
            img#logo {
                width: 51%!important;
                margin-left: 25%!important;
                margin-top: -42%!important;
            }
        }
=======
    max-width: 290px;
}}
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d



        .container {
            padding-right: 8px!important; 
            padding-left: 8px!important; 

        }
<<<<<<< HEAD
        .centradors{
            margin-left: 35%;
        }
        .centradorss{
                   font-size: 12px;
    text-transform: capitalize;
    
    margin-left: 13%;
        }

=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

    </style>





    <script type="text/javascript">

        function notifica(rutColaborador) {

            $.get("notificacion?rutColaborador=" + rutColaborador + "",
                    function (dato) {
                        obj = JSON.parse(dato);


                        var c = document.getElementById('contador');
                        c.innerHTML = obj.contador;




                        //alert(obj.contador);
                        console.log(obj);

                    });


        }

<<<<<<< HEAD
     
=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
    </script>
















<<<<<<< HEAD
    <body>  

<style type="text/css">
                /* When you mouse over the navigation links, change their color */
.sidenavv a:hover {
    color: #f1f1f1;
}
.sidenavv {
    right: 0;
}

/* Position and style the close button (top right corner) */
.sidenavv .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
    </style>
    <script type="text/javascript">
             function openNav() {
            document.getElementById("mySidenav").style.width = "21%";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
            
=======
    <body>

>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
        <?php
        Modal::begin([
            "id" => "modalImagen",
            "footer" => "", // always need it for jquery plugin
        ])
        ?>
        <?php
        echo "<div id='modalContent'></div>";
        Modal::end();
        ?>


        <nav class="navbar navbar-default navbar-fixed-top navbar-principal"  >

            <div class="container">

<<<<<<< HEAD
                <div class="navbar-header bounceInLeft">

                    <button type="button" class="navbar-toggle collapsed bounceInLeft" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style=" margin-top: 20px;">
=======
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

<<<<<<< HEAD
                    <a class="navbar-brand hidden-xs hidden-sm" >

                        <b><img style="width: 100px; margin-left: 5px; margin-top: -18px;" id="logo" src="../web/flesan1.png"></b>
=======
                    <a class="navbar-brand hidden-xs hidden-md" >

                        <b><img style="width: 100px; margin-left: 5px; margin-top: -18px;" id="logo" src="../web/flesan.png"></b>
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

                    </a>
                    <a class="navbar-brand hidden-lg hidden-md" >

<<<<<<< HEAD
                        <b><img style="width: 35%!important; margin-left: 5px;margin-bottom: -20%!important; " id="logo" src="../web/flesan1.png"></b>
=======
                        <b><img style="width: 80px; margin-left: 5px; margin-top: -12px;" id="logo" src="../web/flesan.png"></b>

>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
                    </a>

                </div>

<<<<<<< HEAD
                <div id="navbar" class="collapse navbar-collapse bounceInLeft">

                        <form class="navbar-form hidden-xs hidden-md">
=======
                <div id="navbar" class="collapse navbar-collapse">

                          

                        <form class="navbar-form">
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

                            <div class="form-group" style="display:inline;">

                                <div class="input-group" style="display:table;">

                                </div>

                            </div>

                        </form>

                  
<<<<<<< HEAD
                    <ul class="nav navbar-nav navbar-right bounceInLeft">
                    <li class="active hidden-sm hidden-xs">
                         <a class="icono" title="Gmail" target="_blank" href="https://mail.google.com/mail/"><i class="fab fa-google"></i>&nbsp;</a>
                    </li>
                         <li class=" active hidden-sm hidden-xs">

                          <?= Html::a('<i class="fa fa-home"></i>&nbsp;', ['colaborador/perfil', 'rutColaborador' => $rutColaborador],['class' => 'icono', 'title' => 'Inicio']) ?>
                      </li>
                        
                       
                       <li class="active hidden-sm hidden-xs">
                            
                          <a id="barrita" onclick="openNav()" title="Mis Procesos" ><i class="fas fa-th"></i></a>
                        </li>
                        <li class="active hidden-xs hidden-sm">
                            <?= Html::a('<i  class="fa fa-user"></i>&nbsp;', ['colaborador/compadre', 'rutAmigo' => $rutColaborador],['class' => 'icono', 'title' => 'Perfil']) ?>

                        </li>
                    
                      <li class="active hidden-xs hidden-sm">
                            <?= Html::a('<i class="fas fa-sign-out-alt"></i>&nbsp;', ['/site/salir'], ['data-method' => 'post'],['class' => 'icono', 'title' => 'Salir'])
                            ?></li>	

                    <li class="hidden-md hidden-lg">

                                 <div class="container hidden-md hidden-lg">
                                
                               <li class="hidden-md hidden-lg">
                                <?= Html::a('<i class="fa fa-home"></i>&nbsp;&nbsp;Inicio', ['colaborador/perfil', 'rutColaborador' => $rutColaborador], ['class'=>'centrador', 'title' => 'Inicio']) ?>
                                </li>
                               <li class="hidden-md hidden-lg">
                                <?= Html::a('<i  class="fa fa-user"></i>&nbsp;&nbsp;Perfil', ['colaborador/compadre', 'rutAmigo' => $rutColaborador],['class' => 'centrador', 'title' => 'Perfil']) ?>
                               </li>

                               <li class="hidden-md hidden-lg">
                                <a class="centrador" title="Personas" href="index.php?r=colaborador/amigos"><i class="fas fa-users" aria-hidden="true"></i>&nbsp;&nbsp;Personas</a>
                                </li>
                                <li class="hidden-md hidden-lg">
                                <a class="centrador" title="Gmail" target="_blank" href="https://mail.google.com/mail/"><i class="fab fa-google"></i>&nbsp;&nbsp;Gmail</a>
                                </li>
                                <li class="hidden-md hidden-lg">
                                <a class="centrador" title="Personas" href="index.php?r=colaborador/compadre&rutAmigo=101010"><i class="far fa-dot-circle" aria-hidden="true"></i>&nbsp;&nbsp;Comunicaciones</a>
                                </li>
                                <li class="hidden-md hidden-lg">
                                <a class="centrador" title="Personas" href="index.php?r=colaborador/cumpleanios"><i class="fas fa-birthday-cake" aria-hidden="true"></i>&nbsp;&nbsp;Cumpleaños</a>
                                </li>
                               <li class="hidden-md hidden-lg">
                                <a class="centrador" title="Grupos ¡Pronto!" href="#"><i class="far fa-dot-circle" aria-hidden="true"></i>&nbsp;&nbsp;Grupos <span class="badge" id="pronto">¡Pronto!</span></a>
                            </li>
                                  <hr>
                               <li class="hidden-md hidden-lg">
                                <a class="centrador" title="Biblioteca" href="index.php?r=colaborador/biblioteca"><i class="far fa-dot-circle" aria-hidden="true"></i>&nbsp;&nbsp;Biblioteca</a>
                            </li>
                                <hr>
                               <li class="hidden-md hidden-lg">
                                <a class="centrador" title="Recursos Humanos"  href="#helena" data-toggle="collapse"><i class="far fa-dot-circle" aria-hidden="true"></i>&nbsp;&nbsp;RRHH (+)</a>
                              </li>
                                <div id="helena" class="collapse">


                               <li class="hidden-md hidden-lg">
                                <?= Html::a('<i class="far fa-handshake"></i> Beneficios', ['colaborador/convenios'], ['class'=>'centradorss','title'=>'Beneficios' ]) ?>                         
                               </li> <br>
                               <li>
                                <?= Html::a('<i class="far fa-star"></i> Puntos', ['colaborador/beneficios', 'rutAmigo' => $rutColaborador],['class' => 'centradorss','title'=>'Mis Puntos Flesan']) ?>

                               </li><br>
                               <li>
                                <a class="centradorss" title="Clima ¡Pronto!" href="#"><i class="fas fa-sun"></i> Clima<span class="badge" id="pronto">¡pronto!</span></a>
                                </li> <br>
                                <li>
                                <a class="centradorss" title="Desempeño ¡Pronto!" href="#"><i class="fas fa-chart-line"></i> Desempeño<span class="badge" id="pronto">¡pronto!</span></a>
                                </li> <br>
                                <li>
                                <a class="centradorss" title="Capacitación ¡Pronto!" href="#"><i class="fas fa-graduation-cap"></i> Capacitación<span class="badge" id="pronto">¡pronto!</span></a>
                                </li> <br>
                                <li>
                                <a class="centradorss" title="Inducción ¡Pronto!" href="#"><i class="fas fa-book"></i> Inducción<span class="badge" id="pronto">¡pronto!</span></a>
                                </li> <br>
                                <li>
                                <a class="centradorss" title="Go Integro" target="_blank" href="https://flesan.gointegro.com/gosocial/company/stream"><i class="fas fa-ticket-alt"></i> Convenios (Go Integro)</a>                                
                                </li>    <br>                             
                                <li>
                                <a class="centradorss" title="Movilidad ¡Pronto!" href="#"><i class="fas fa-child"></i> Movilidad<span class="badge" id="pronto">¡pronto!</span></a>
                                </li> <br>
                                <li>
                                <a class="centradorss" title="Payroll" target="_blank" href="https://www.grupopayroll.com/webpay/loginap.aspx"><i class="far fa-copy"></i> Payroll</a>
                                </li> <br>
                                <li>
                                <a class="centradorss" title="Control IT" target="_blank" href="http://app.ctrlit.cl/ctrl/login/auth"><i class="fas fa-code-branch"></i> Control IT</a>
                                </li>
                                </div>    
                                  <hr>
                               <li class="hidden-md hidden-lg">
                                <a class="centrador" title="Operaciones"  href="#jp" data-toggle="collapse"><i class="far fa-dot-circle" aria-hidden="true"></i>&nbsp;&nbsp;Operaciones (+)</a>
                            </li>
                                <div id="jp" class="collapse">
                                    <br><br>
                                <a class="centradorss" title="Biwiser" target="_blank" href="https://www.biwiser.com/que-es-biwiser/"><i class="fas fa-cogs"></i> Biwiser</a>
                                <br><br> 
                                <a class="centradorss" title="Iconstruye" target="_blank" href="https://www.iconstruye.com/includes/default.aspx"><i class="far fa-building"></i> Iconstruye</a>
                                <br><br>
                                <a class="centradorss" title="DEC" target="_blank" href="https://www.dec.cl/login.php"><i class="fas fa-briefcase"></i> DEC</a>
                                <br><br>
                                <a class="centradorss" title="Canal de denuncias"  target="_blank" href="https://www.flesanteescucha.com/"><i class="fas fa-bullhorn"></i> Canal de denuncias</a>
                                <br><br>
                                <a class="centradorss" title="Avance de Obra Flesan" href="https://sites.google.com/flesan.cl/gerenciatecnicaflesan-control/panel-principal"><i class="far fa-arrow-alt-circle-right"></i> Avance Flesan</a>
                                <br><br>
                                <a class="centradorss" target="_blank" title="Avance de Obra DVC" href="https://sites.google.com/flesan.cl/planificaciondvc/planificaci%C3%B3n-y-control?authuser=0"><i class="far fa-arrow-alt-circle-right"></i> Avance DVC</a>                                
                              
                             
                                </div>    


                                <hr>
                               <li class="hidden-md hidden-lg">
                                <a class="centrador" title="Preguntas Frecuentes"  href="index.php?r=site/preguntas" ><i class="fas fa-question-circle" aria-hidden="true"></i>&nbsp;&nbsp;Preguntas frecuentes</a>
                            </li>
                              <li class="hidden-md hidden-lg">
                                <?php
                            echo Html::a('<i class="fas fa-sign-out-alt"></i>&nbsp;Salir', ['/site/salir'], ['data-method' => 'post'],['class' => 'icono', 'title' => 'Salir']);
                            ?></li> 

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

                    </li>



                    
                           
                      
=======
                    <ul class="nav navbar-nav navbar-right">

                        <li class="active">
                            <?= Html::a('<i  class="fa fa-user"></i>&nbsp;' . $session['nombreColaborador'], ['colaborador/compadre', 'rutAmigo' => $rutColaborador]) ?>

                        </li>

                        <li>

                          <?= Html::a('<i class="fa fa-home"></i>&nbsp;Inicio', ['colaborador/perfil', 'rutColaborador' => $rutColaborador]) ?>

                        <!-- Procesos    
                        <li>

                            <?= Html::a('<i class="fas fa-caret-square-up"></i>&nbsp;Procesos', ['colaborador/perfil']) ?>

                        </li>
                        -->

                        <!-- Ranking
                        <li>

                            <?= Html::a('<i class="fas fa-trophy"></i>&nbsp;Ranking', ['colaborador/perfil']) ?>

                        </li>
                        -->

                        <!-- Mis tareas
                        <li>

                            <?= Html::a('<i class="fas fa-envelope"></i>&nbsp;Mis tareas', ['colaborador/tareas']) ?>

                        </li>
                        -->

                        <!-- Inbox
                        <li>

                            <?= Html::a('<i class="fas fa-envelope"></i>&nbsp;Inbox', ['colaborador/perfil']) ?>

                        </li>
                        -->

                        <li><?php
                            echo Html::a('<i class="fas fa-sign-out-alt"></i>&nbsp;Salir', ['/site/logout'], ['data-method' => 'post']);
                            ?></li>	

>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

                    </ul>

                </div>

            </div>

        </nav>



        <?php $this->beginBody() ?>

<<<<<<< HEAD
        <div class="container-fluid">
  
=======
        <div class="container">

>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d



            <div class="col-md-12 col-xs-12 no-paddin-xs">

                <div class="row">

<<<<<<< HEAD
                    
=======

>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

                    <?= $content ?>



                </div>

            </div>

        </div><!-- end timeline content-->


        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
