<?php

use app\models\Reserva;
use yii\base\Model;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Vuelo;

/* @var $this yii\web\View */
/* @var $model app\models\Reserva */
/* @var $form yii\widgets\ActiveForm */
?>

<legend>
            <?php
            // new parcel button
            echo Html::a('Nueva Reserva', 'javascript:void(0);', [
              'id' => 'product-new-parcel-button', 
              'class' => 'pull-right btn btn-default btn-xs'
            ])
            ?>
        </legend>
        
        

<div class="reserva-form">

    <?php 
	$var = \yii\helpers\ArrayHelper::map(Vuelo::find()->where('disponibles > 0')->all(), 'id_vuelo', 'nombreVuelo');
    $form = ActiveForm::begin(); 
    ?>

    <?=
	
     $form->field($model, 'id_vuelo')->dropDownList($var, ['prompt' => 'Seleccione Uno' ]); ?>

    <?= $form->field($model, 'nombre_pasajero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CI_pasajero')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
