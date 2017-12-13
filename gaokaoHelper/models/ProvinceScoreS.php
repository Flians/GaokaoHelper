<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProvinceScore;

/**
 * ProvinceScoreS represents the model behind the search form about `app\models\ProvinceScore`.
 */
class ProvinceScoreS extends ProvinceScore
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'year', 'art1', 'art2', 'art3', 'science1', 'science2', 'science3'], 'integer'],
            [['province'], 'safe'],
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
        $query = ProvinceScore::find();

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
            'year' => $this->year,
            'art1' => $this->art1,
            'art2' => $this->art2,
            'art3' => $this->art3,
            'science1' => $this->science1,
            'science2' => $this->science2,
            'science3' => $this->science3,
        ]);

        $query->andFilterWhere(['like', 'province', $this->province]);

        return $dataProvider;
    }
}
