<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reserva;

/**
 * ReservaSearch represents the model behind the search form of `app\models\Reserva`.
 */
class ReservaSearch extends Reserva
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_reserva', 'id_usuario', 'id_vuelo'], 'integer'],
            [['nombre_pasajero', 'CI_pasajero'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Reserva::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_reserva' => $this->id_reserva,
            'id_usuario' => $this->id_usuario,
            'id_vuelo' => $this->id_vuelo,
        ]);

        $query->andFilterWhere(['like', 'nombre_pasajero', $this->nombre_pasajero])
            ->andFilterWhere(['like', 'CI_pasajero', $this->CI_pasajero]);

        return $dataProvider;
    }
}
