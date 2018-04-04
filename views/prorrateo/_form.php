<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Prorrateo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prorrateo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idprorrateo')->textInput() ?>

    <?= $form->field($model, 'codigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rutcolaborador')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cargo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dependencia')->textInput() ?>

    <?= $form->field($model, 'codigoCCoriginal')->textInput() ?>

    <?= $form->field($model, 'descripcionCCoriginal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'empresa')->textInput() ?>

    <?= $form->field($model, 'descripcionCCdistribuir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codigoManager')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'distribucionA12')->textInput() ?>

    <?= $form->field($model, 'codigoPayroll')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'porcentajeDistrubucion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
