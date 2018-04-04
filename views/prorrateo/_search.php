<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProrrateoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prorrateo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idprorrateo') ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'rutcolaborador') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'cargo') ?>

    <?php // echo $form->field($model, 'dependencia') ?>

    <?php // echo $form->field($model, 'codigoCCoriginal') ?>

    <?php // echo $form->field($model, 'descripcionCCoriginal') ?>

    <?php // echo $form->field($model, 'empresa') ?>

    <?php // echo $form->field($model, 'descripcionCCdistribuir') ?>

    <?php // echo $form->field($model, 'codigoManager') ?>

    <?php // echo $form->field($model, 'distribucionA12') ?>

    <?php // echo $form->field($model, 'codigoPayroll') ?>

    <?php // echo $form->field($model, 'porcentajeDistrubucion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
