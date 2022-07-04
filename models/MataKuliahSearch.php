<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MataKuliah;

/**
 * MataKuliahSearch represents the model behind the search form of `app\models\MataKuliah`.
 */
class MataKuliahSearch extends MataKuliah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_matkul', 'id_dosen'], 'integer'],
            [['nama_matkul', 'jumlah_sks', 'semester'], 'safe'],
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
        $query = MataKuliah::find();

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
            'id_matkul' => $this->id_matkul,
            'id_dosen' => $this->id_dosen,
        ]);

        $query->andFilterWhere(['like', 'nama_matkul', $this->nama_matkul])
            ->andFilterWhere(['like', 'jumlah_sks', $this->jumlah_sks])
            ->andFilterWhere(['like', 'semester', $this->semester]);

        return $dataProvider;
    }
}
