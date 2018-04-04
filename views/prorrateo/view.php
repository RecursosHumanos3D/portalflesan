<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Prorrateo */

$this->title = $model->idprorrateo;
$this->params['breadcrumbs'][] = ['label' => 'Prorrateos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prorrateo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idprorrateo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idprorrateo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idprorrateo',
            'codigo',
            'rutcolaborador',
            'nombre',
            'cargo',
            'dependencia',
            'codigoCCoriginal',
            'descripcionCCoriginal',
            'empresa',
            'descripcionCCdistribuir',
            'codigoManager',
            'distribucionA12',
            'codigoPayroll',
            'porcentajeDistrubucion',
        ],
    ]) ?>

</div>
