<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vuelo;

/**
 * VueloSearch represents the model behind the search form of `app\models\Vuelo`.
 */
class VueloSearch extends Vuelo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_vuelo', 'puestos', 'disponibles'], 'integer'],
            [['nombreVuelo', 'fechaSalida'], 'safe'],
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
        $query = Vuelo::find();

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
            'id_vuelo' => $this->id_vuelo,
            'puestos' => $this->puestos,
            'fechaSalida' => $this->fechaSalida,
            'disponibles' => $this->disponibles,
        ]);

        $query->andFilterWhere(['like', 'nombreVuelo', $this->nombreVuelo]);

        return $dataProvider;
    }
}
