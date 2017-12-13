<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SchoolBase;

/**
 * SchoolSearch represents the model behind the search form about `app\models\SchoolBase`.
 */
class SchoolSearch extends SchoolBase
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code'], 'integer'],
            [['name', 'title', 'locate', 'belong', 'rank', 'uni_col', 'type'], 'safe'],
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
        $query = SchoolBase::find();

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
            'code' => $this->code,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'locate', $this->locate])
            ->andFilterWhere(['like', 'belong', $this->belong])
            ->andFilterWhere(['like', 'rank', $this->rank])
            ->andFilterWhere(['like', 'uni_col', $this->uni_col])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
