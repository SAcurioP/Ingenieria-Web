<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vuelo */

$this->title = 'Update Vuelo: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Vuelos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_vuelo, 'url' => ['view', 'id' => $model->id_vuelo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vuelo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
