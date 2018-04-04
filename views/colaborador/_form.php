<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
<<<<<<< HEAD
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

/* @var $this yii\web\View */
/* @var $model app\models\Colaborador */
/* @var $form yii\widgets\ActiveForm */
<<<<<<< HEAD
//var_dump($hobbies);die();
=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
?>

<div class="colaborador-form">

<<<<<<< HEAD
    <?php

     $form = ActiveForm::begin(); ?>
=======
    <?php $form = ActiveForm::begin(); ?>
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d



    <?= $form->field($perfil, 'rfoto')->fileInput() ?>
    <?= $form->field($perfil, 'rbio')->textarea(['rows' => '6']) ?>
<<<<<<< HEAD
    <?= $form->field($perfil, 'rhobbie')->textarea(['rows' => '2']) ?>
    <?= $form->field($perfil, 'rmusica')->textarea(['rows' => '2']) ?>
   
=======



>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Actualiza tus datos',  ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
