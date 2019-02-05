<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VueloSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vuelo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_vuelo') ?>

    <?= $form->field($model, 'puestos') ?>

    <?= $form->field($model, 'nombreVuelo') ?>

    <?= $form->field($model, 'fechaSalida') ?>

    <?= $form->field($model, 'disponibles') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
