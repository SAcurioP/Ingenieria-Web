<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vuelo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vuelo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'puestos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombreVuelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fechaSalida')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
