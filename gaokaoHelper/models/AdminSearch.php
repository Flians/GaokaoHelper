<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AdminBase;

/**
 * AdminSearch represents the model behind the search form about `app\models\AdminBase`.
 */
class AdminSearch extends AdminBase
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'psd', 'level'], 'safe'],
            [['operaterid'], 'integer'],
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
        $query = AdminBase::find();

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
            'operaterid' => $this->operaterid,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'psd', $this->psd])
            ->andFilterWhere(['like', 'level', $this->level]);

        return $dataProvider;
    }
}
