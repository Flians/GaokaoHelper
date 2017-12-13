<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SchoolScore;

/**
 * SchoolScoreSearch represents the model behind the search form about `app\models\SchoolScore`.
 */
class SchoolScoreSearch extends SchoolScore
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'year', 'plan', 'over_line', 'min_score', 'min_rank', 'avg_score', 'avg_overline'], 'integer'],
            [['schooname', 'province', 'art_science', 'pici'], 'safe'],
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
        $query = SchoolScore::find();

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
            'plan' => $this->plan,
            'over_line' => $this->over_line,
            'min_score' => $this->min_score,
            'min_rank' => $this->min_rank,
            'avg_score' => $this->avg_score,
            'avg_overline' => $this->avg_overline,
        ]);

        $query->andFilterWhere(['like', 'schooname', $this->schooname])
            ->andFilterWhere(['like', 'province', $this->province])
            ->andFilterWhere(['like', 'art_science', $this->art_science])
            ->andFilterWhere(['like', 'pici', $this->pici]);

        return $dataProvider;
    }
}
