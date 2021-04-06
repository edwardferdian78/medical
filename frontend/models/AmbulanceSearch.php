<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Ambulance;

/**
 * AmbulanceSearch represents the model behind the search form of `common\models\Ambulance`.
 */
class AmbulanceSearch extends Ambulance
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nama', 'alamat', 'tanggal'], 'safe'],
            [['jarak', 'harga'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Ambulance::find();

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
            'id' => $this->id,
            'tanggal' => $this->tanggal,
            'jarak' => $this->jarak,
            'harga' => $this->harga,
        ]);

        $query->andFilterWhere(['ilike', 'nama', $this->nama])
            ->andFilterWhere(['ilike', 'alamat', $this->alamat]);

        return $dataProvider;
    }
}
