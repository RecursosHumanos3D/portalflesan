<<<<<<< HEAD
<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use kartik\widgets\FileInput;
use yii\web\Controller;
use app\Controllers\BuscarController;
use app\Controllers\ColaboradorController;
use app\models\Colaborador;
use app\models\RAmigos;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

date_default_timezone_set("America/Santiago");


$lugar = 1;
$rut2 = 1;

?>

<?php
Modal::begin([
    "id" => "modal",
    "footer" => "", // always need it for jquery plugin
])
?>
<?php
echo "<div id='modalContent'></div>";
Modal::end();
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


<div class="container-fluid" style="margin-top:150px;">
    <div class="row-fluid">
        <div class="col-md-10 col-xs-12 col-sm-12  animated fadeInLeft">

            <div class="row">
                <div class="col-md-4 hidden-xs">
                    <div class="profile-info-left">
                        <div class="text-center">
                            <?= Html::img('@web/img/perfil/' . $perfil->rfoto, ['alt' => 'Avatar', 'width' => 200, 'class' => 'avatar img-circle perfilll', 'id' => 'colaborador-' . $model->rutColaborador]); ?>
                            <h2><?php echo $model->nombreColaborador . " " . $model->apellidosColaborador; ?></h2>
                        </div>

                        <div style="text-align: center!important;" class="action-buttons">
                            <div class="row">
                                <div class="col-xs-12">
                                    <?= Html::button('Actualiza tus datos', ['value' => Url::to('index.php?r=colaborador/foto&rutColaborador=' . $model->rutColaborador . ''), 'class' => 'act btn btn-lg btn-raised btn-success actualiza', 'id' => 'modalButton']) ?>
                                    <button  onclick="rotates(<?php echo $model->rutColaborador; ?>);" class="btn btn-lg btn-raised btn-success rota">
                                        Rotar foto
                                    <i class="fa fa-undo" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="section" align="center">
                            <h3>Mi Valoración</h3>
                            <p> <span id="a" class="badge"><?php echo $estadistica->rcomentarios; ?></span><br>Comentarios Realizados</p>
                            <p><span id="b" class="badge"><?php echo $estadistica->rcomentariosr; ?></span><br>Comentarios Recibidos</p>
                            <p><span id="c" class="badge"><?php echo $estadistica->rlikes; ?></span> <br>Me gusta Realizados</p>
                            <p><span id="d" class="badge"><?php echo $estadistica->rlikesr; ?></span> <br>Me gusta Recibidos</p>
                        </div>

                        <div class="section" align="center">
                            <h3>Mis Procesos </h3>
                           <button onclick="window.open('','_blank')" class="btn btn-lg btn-raised btn-success procesos" title="Beneficios">
                                <i class="fas fa-star" aria-hidden="true"></i> Beneficios
                            </button>

                        </div>

                        <div class="section" align="center">
                            <h3>Mis Plataformas </h3>
                           <button onclick="window.open('http://www.flesan.cl','_blank')" class="btn btn-lg btn-raised btn-success procesos" title="Clima">
                                <i class="fas fa-sun" aria-hidden="true"></i> Clima
                            </button>

                            <button class="btn btn-lg btn-raised btn-success procesos" title="Desempeño">
                                <i class="fas fa-chart-line" aria-hidden="true"></i> Desempeño
                            </button>
                            <button onclick="window.open('http://www.gointegro.com/es/inicio/','_blank')" class="btn btn-lg btn-raised btn-success procesos" title="Convenios">
                                <i class="fas fa-thumbs-up" aria-hidden="true"></i> Convenios
                            </button>
  
                            <button onclick="window.open('https://www.payroll.cl/webpay/loginap.aspx?ReturnUrl=%2fwebpay%2fmenuap.aspx','_blank')" class="btn btn-lg btn-raised btn-success procesos" title="Payroll">
                                <i class="far fa-file-alt" aria-hidden="true"></i> Payroll
                            </button>

                            <button onclick="window.open('https://www.biwiser.com/que-es-biwiser/','_blank')" class="btn btn-lg btn-raised btn-success procesos" title="Biwiser">
                                <i class="far fa-clipboard" aria-hidden="true"></i> Biwiser
                            </button>

                            <button onclick="window.open(' https://qa.iconstruye.cl/portales/index.html?ReturnUrl=%2f','_blank')" class="btn btn-lg btn-raised btn-success procesos" title="IConstruye">
                                <i class="fas fa-shopping-cart" aria-hidden="true"></i> IConstruye
                            </button>   

                            <button onclick="window.open(' https://http://www.flesan.cl/','_blank')" class="btn btn-lg btn-raised btn-success procesos" title="Canal de Denuncias">
                                <i class="fas fa-ban" aria-hidden="true"></i> Canal de Denuncias
                            </button>   

                            <button onclick="window.open(' https://http://www.flesan.cl/','_blank')" class="btn btn-lg btn-raised btn-success procesos" title=" Control IT">
                                <i class="fas fa-shield-alt" aria-hidden="true"></i> Control IT
                            </button>   

                             <!-- Futuros Procesos
                            <button class="btn btn-lg btn-raised btn-success procesos">
                                <i class="fas fa-rocket" aria-hidden="true"></i> Inducción
                            </button>
                            <button class="btn btn-lg btn-raised btn-success procesos">
                                <i class="fas fa-tachometer-alt" aria-hidden="true"></i> Wellness Org
                            </button>
                            <button class="btn btn-lg btn-raised btn-success procesos">
                                <i class="fas fa-star" aria-hidden="true"></i> Beneficios
                            </button>
                            <button class="btn btn-lg btn-raised btn-success procesos">
                                <i class="fas fa-graduation-cap" aria-hidden="true"></i> Aprendizaje
                            </button>
                            <button class="btn btn-lg btn-raised btn-success procesos">
                                <i class="fas fa-universal-access" aria-hidden="true"></i> Bienestar
                            </button>
                             <button class="btn btn-lg btn-raised btn-success procesos">
                                <i class="far fa-money-bill-alt" aria-hidden="true"></i> Payroll 
                            </button>
                            -->
                        </div>


                        <div class="section" align="center">
                            <h3>Mis Compañeros</h3>
                            <div class="widget panel-friends">
                                <div class="widget-body bordered-top bordered-red text-center">
                                    <ul class="friends">
                                        <?php
                                        $rutColaborador = $model['rutColaborador'];
                                        $model2 = BuscarController::encuentraAmigos($model['rutColaborador']);

                                        foreach ($model2 as $amigo) {
                                            $modell3 = BuscarController::findColaboradorRut($amigo["rut2"]);
                                            
                                            $perfilamigo = BuscarController::findPerfiles($modell3["idperfilRed"]);
                                            ?>
                                            
                                            <li>
                                                <a href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=".$modell3["rutColaborador"]; ?>">
                                                    <img style="-ms-transform: rotate(<?php echo $perfilamigo[0]['rrotador']; ?>deg);
                                                         -webkit-transform: rotate(<?php echo $perfilamigo[0]['rrotador']; ?>deg);
                                                         transform: rotate(<?php echo $perfilamigo[0]['rrotador']; ?>deg);
                                                        " src="../web/img/perfil/t/<?php echo $perfilamigo[0]["rfoto"]; ?>" title="<?php echo $modell3["nombreColaborador"] . " " . $modell3['apellidosColaborador']; ?>" class="img-responsive tip">
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="col-md-8 col-lg-8 col-xs-12">
                    <div class="profile-info-right">
                        <div class="tab-content">
                            <style>
                                .fb-status-update-entry textarea {
                                    resize: none;
                                    /* Needs to be !important, since Bootstrap sets this elsewhere. */
                                    box-shadow: none !important;
                                    border: none;
                                }
                                .fb-status-update-entry .media {
                                    border-top: 1px solid lightgrey;
                                    border-bottom: 1px solid lightgrey;
                                    /* Adds whitespace between bottom border and buttons */
                                    margin-bottom: 10px;
                                    /* Adds whitespace between top of media object and top border. */
                                    padding-top: 5px;
                                }
                            </style>
                        <div class="col-md-12 col-sm-12">    
                            <h2><p class="act">Actividades en la Red</p></h2>
                                <div class="panel panel-default publicador">
                                     <div class="panel-body publicador" >
                                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'], 'action' => ['colaborador/post']]); ?>
                                    
                                    <div class="row">
                                        <input type="hidden" name="rutColaborador" value="<?php echo $rutColaborador; ?>">
                                        <input type="hidden" name="rut2" value="<?php echo $rut2; ?>">
                                        <input type="hidden" name="lugar" value="<?php echo $lugar; ?>">
                                    </div>

                                    <div class="media">
                                        <div class="media-left media-top">
                                            </div>
                                        <div class="media-body">
                                            <div class="form-group">
                                                <!-- rows="2" means "display the textarea as 2 rows high". The user can
                                                     enter more than 2 rows of text. -->
                                            <div class="col-md-2 col-xs-4">
                                                <img alt="Avatar" style="-ms-transform: rotate(<?php echo $perfil->rrotador; ?>deg);
                                                         -webkit-transform: rotate(<?php echo $perfil->rrotador; ?>deg);
                                                         transform: rotate(<?php echo $perfil->rrotador; ?>deg);" src="../web/img/perfil/t/<?php echo $perfil->rfoto; ?>" title="<?php echo $model->nombreColaborador . " " . $model->apellidosColaborador; ?>" class="media-object avatar">
                                                    <br>
                                            </div>
                                                <div class="col-md-10 col-xs-7">
                                                    <?= Yii::$app->session->getFlash('error'); ?>
                                                    <textarea onKeyDown="contarCaracteres(this.form.rdescripcionPost, this.form.remLen, 180);" placeholder="Que estas pensando hoy??? " maxlength="180"  name="rdescripcionPost" data-ls-module="charCounter" placeholder="Que estas pensando hoy??? " rows="5" maxlength="180" class="form-control input-lg p-text-area"></textarea>
                                                    <p>Contador: <font id="contador">180</font></p>
                                                    <br>
                                                </div>       
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="nav nav-pills">
                                        <li role="presentation" class="active">
                                            <?= $form->errorSummary($model); ?>
                                            <?=
                                            $form->field($model3, 'file')->widget(FileInput::classname(), [
                                                'pluginOptions' => [
                                                    'showCaption' => false,
                                                    'showRemove' => false,
                                                    'ShowLabel' => false,
                                                    'showUpload' => false,
                                                    'browseClass' => 'btn btn-primary',
                                                    'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
                                                    'browseLabel' => 'Selecciona un archivo']
                                            ])->label(false);
                                            ?>

                                        </li>
                                        <li role="presentation" class="active">
                                            <button class="btn btn-primary"  type="submit" data-toggle="collapse" data-target="#demo1" ><span class=" glyphicon glyphicon-pencil">
                                                </span> <strong>Publicar</strong></button>
                                        </li>

                                    </ul>
                                </div>

                                <?php ActiveForm::end(); ?>

                            </div>


                            <!-- activities -->
                            <div class="tab-pane fade in active" id="activities">
                                <div class="conatiner" style="margin:35px auto;">
                                    <div class="row">
                                        <div class="col-md-12 results"></div>
                                    </div>
                                    <div class="text-center" id="loading">
                                        <img src="ajax-loader.gif" id="ani_img"/>
                                    </div>
                                    <button class="btn btn-block btn-primary hidden-lg hidden-md" onclick="myContent2();">Cargar mas!</button>

                                </div>

                                <script>
                                    var mypage = 1;
                                    mycontent(mypage);
                                    $(window).scroll(function () {
                                        if ($(window).scrollTop() >= $(document).height() - $(window).height() - 4) {
                                            mypage++;
                                            mycontent(mypage);
                                        }
                                    })
                                    function mycontent(mypage) {

                                        $('#ani_img').show();
                                        $.get('index.php?r=colaborador/reload&page=' + mypage + '&rutColaborador=<?php echo $rutColaborador; ?>', function (data) {
                                            if (data.trim().length == 0) {
                                                $('#loading').append('<button style="margin-right:35%;" class="btn btn-primary">No existen mas post disponibles</button>');
                                                var e = document.getElementById("loading");
                                                e.id = "loadings";
                                                document.getElementById('ani_img').style.display = 'none';
                                                document.getElementById('ani_img').style.visibility = 'none';
                                                var s = document.getElementById("ani_img");
                                                s.id = "ani_imgs"
                                            }
                                            $('.results').append(data);

                                            $('.well').animate({scrollTop: $('#loading').offset().top}, 5000, 'easeOutBounce');
                                            setInterval(function () { }, 3000);

                                        })
                                    }

                                    function myContent2() {
                                        mypage++;
                                        mycontent(mypage);
                                    }
                                </script>

                            </div>
                            <!-- end activities -->
                            <!-- followers -->
                            <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
                                <div class="modal-dialog">
                                    <button type="button" class="close hidden"  aria-hidden="true">×</button>
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 hidden-xs">
                    <div class="profile-info-derecho">
                        <div class="text-center">
                   
                            <?php foreach ($publicidad as $p) {
                                ?>                         
                               <a href="<?php echo $p["rlink"];?> " target="_blank"><img style="margin-right:10px" class="imgpublicidad" title="¡Click Aquí!" src="../web/img/publicidad/<?php echo $p["rfoto"]; ?>" ><br>    
                            </a>
                                <?php
                                } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
=======
<div class="beneficios-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
