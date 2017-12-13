<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CardBase;

/**
 * CardSearch represents the model behind the search form about `app\models\CardBase`.
 */
class CardSearch extends CardBase
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'batch', 'operaterid', 'rank'], 'integer'],
            [['psd', 'zkzh', 'kemu'], 'safe'],
            [['score', 'yuwen', 'yingyu', 'shuxue', 'zonghe'], 'number'],
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
        $query = CardBase::find();

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
            'batch' => $this->batch,
            'operaterid' => $this->operaterid,
            'score' => $this->score,
            'rank' => $this->rank,
            'yuwen' => $this->yuwen,
            'yingyu' => $this->yingyu,
            'shuxue' => $this->shuxue,
            'zonghe' => $this->zonghe,
        ]);

        $query->andFilterWhere(['like', 'psd', $this->psd])
            ->andFilterWhere(['like', 'zkzh', $this->zkzh])
            ->andFilterWhere(['like', 'kemu', $this->kemu]);

        return $dataProvider;
    }
}
