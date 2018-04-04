<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProrrateoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$session = Yii::$app->session;
$rutColaborador = $session['rut'];
$this->title = 'Prorrateos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prorrateo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Prorrateo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idprorrateo',
            'codigo',
            'rutcolaborador',
            'nombre',
            'cargo',
            //'dependencia',
            //'codigoCCoriginal',
            //'descripcionCCoriginal',
            //'empresa',
            //'descripcionCCdistribuir',
            //'codigoManager',
            //'distribucionA12',
            //'codigoPayroll',
            //'porcentajeDistrubucion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
