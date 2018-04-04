<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Prorrateo */

$this->title = 'Create Prorrateo';
$this->params['breadcrumbs'][] = ['label' => 'Prorrateos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prorrateo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
