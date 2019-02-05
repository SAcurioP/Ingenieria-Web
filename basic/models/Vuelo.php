<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vuelo".
 *
 * @property string $id_vuelo
 * @property string $puestos
 * @property string $nombreVuelo
 * @property string $fechaSalida
 * @property int $disponibles
 *
 * @property Reserva[] $reservas
 */
class Vuelo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vuelo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['puestos', 'nombreVuelo', 'fechaSalida'], 'required'],
            [['puestos'], 'integer'],
            [['fechaSalida'], 'safe'],
            [['disponibles'], 'integer', 'min' => 0 ],
            [['nombreVuelo'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_vuelo' => 'Id Vuelo',
            'puestos' => 'Puestos',
            'nombreVuelo' => 'Nombre Vuelo',
            'fechaSalida' => 'Fecha Salida',
            'disponibles' => 'Disponibles',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservas()
    {
        return $this->hasMany(Reserva::className(), ['id_vuelo' => 'id_vuelo']);
    }
}
