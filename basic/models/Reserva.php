<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reserva".
 *
 * @property int $id_reserva
 * @property string $id_usuario
 * @property string $id_vuelo
 * @property string $nombre_pasajero
 * @property string $CI_pasajero
 *
 * @property Users $usuario
 * @property Vuelo $vuelo
 */
class Reserva extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reserva';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_usuario', 'id_vuelo', 'nombre_pasajero', 'CI_pasajero'], 'required'],
            [['id_usuario', 'id_vuelo'], 'integer'],
            [['nombre_pasajero'], 'string', 'max' => 50],
            [['CI_pasajero'], 'string', 'max' => 10],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['id_usuario' => 'id']],
            [['id_vuelo'], 'exist', 'skipOnError' => true, 'targetClass' => Vuelo::className(), 'targetAttribute' => ['id_vuelo' => 'id_vuelo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_reserva' => 'Id Reserva',
            'id_usuario' => 'Id Usuario',
            'id_vuelo' => 'Id Vuelo',
            'nombre_pasajero' => 'Nombre Pasajero',
            'CI_pasajero' => 'Ci Pasajero',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Users::className(), ['id' => 'id_usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVuelo()
    {
        return $this->hasOne(Vuelo::className(), ['id_vuelo' => 'id_vuelo']);
    }
}
