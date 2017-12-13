<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "card_count".
 *
 * @property integer $id
 * @property integer $operaterid
 * @property integer $batch
 * @property integer $count
 * @property string $c
 */
class CardCount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'card_count';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'operaterid', 'batch', 'count', 'c'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'operaterid' => 'Operaterid',
            'batch' => '批次',
            'count' => '总数',
            'c' => '已使用',
        ];
    }
}
