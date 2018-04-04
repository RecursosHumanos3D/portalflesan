 <?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use app\Controllers\BuscarController;
use kartik\widgets\FileInput;
use app\models\Colaborador;
use app\models\RAmigos;
use yii\web\Controller;
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

<?php
Modal::begin([
    "id" => "modal1",
    "size" => "large",
    "footer" => "", // always need it for jquery plugin
])
?>
<?php
echo "<div id='modalContent'>
<img id='my_image' />
</div>";
Modal::end();
?>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

 <div class="profile-info-left amigo">
                        <div class="text-center">
                                <?= Html::img('@web/img/perfil/' . $perfil->rfoto, ['alt' => 'Avatar', 'width' => 200, 'class' => 'avatar img-circle perfill', 'id' => 'colaborador-' . $model->rutColaborador]); ?>

                            <h2><?php echo $model->nombreColaborador . " " . $model->apellidosColaborador; ?></h2></h2>
                        </div>
                        <div class="action-buttons">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    $global = $rutColaborador;


                                    if ($rutColaborador == $model->rutColaborador) {
                                        ?> 

                    
                      <?= Html::button('<span class=" glyphicon glyphicon-pencil">', ['value' => Url::to('index.php?r=colaborador/foto&rutColaborador=' . $model->rutColaborador . ''), 'class' => 'btn btn-lg btn-raised btn-success', 'id' => 'modalButton']) ?>
                                    <button  onclick="rotates(<?php echo $model->rutColaborador; ?>);" class="btn btn-lg btn-raised btn-success rota">
                        
                      
                        <i class="fa fa-undo" aria-hidden="true"></i>
                        </button>
                                    <?php } ?>
                                </div>

                            </div>
                        </div>
                        <div align="pull-left">
                            <p><?php echo $perfil->rbio; ?></p>
                        </div>

                        <div align="pull-left">
                        <h3 class="info">Tiempo en flesan</h3>
                            <p><?php echo $model->fechaingreso; ?></p>
                        </div>
                         <div align="pull-left">
                        <h3 class="info">>Cumpleaños</h3>
                            <p><?php echo $model->fechanacimiento; ?></p>
                        </div>
                        <div align="pull-left">
                        <h3 class="info">>Hobbies</h3>
                            <p><?php echo $perfil->rhobbie; ?></p>
                        </div>
                        <div align="pull-left">
                        <h3 class="info">>Música</h3>
                            <p><?php echo $perfil->rmusica; ?></p>
                        </div>
                       <!-- <div class="section" align="center">
                            <h3>Mi Valoración</h3>
                            <p><span id="e" class="badge"><?php echo $estadistica->rcontadorP; ?></span> <br>Post Realizados</p>
                            <p> <span id="a" class="badge"><?php echo $estadistica->rcomentarios; ?></span><br>Comentarios Realizados</p>
                            <p><span id="b" class="badge"><?php echo $estadistica->rcomentariosr; ?></span><br>Comentarios Recibidos</p>
                            <p><span id="c" class="badge"><?php echo $estadistica->rlikes; ?></span> <br>Me gusta Realizados</p>
                            <p><span id="d" class="badge"><?php echo $estadistica->rlikesr; ?></span> <br>Me gusta Recibidos</p>
                        </div>
                        -->

                       

                 

                    </div>