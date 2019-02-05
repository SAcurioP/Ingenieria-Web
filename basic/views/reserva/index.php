<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Vuelo;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReservaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reservas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reserva-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reserva', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ##'id_reserva',
            'id_usuario',
            'id_vuelo',
            'nombre_pasajero',
            'CI_pasajero',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
