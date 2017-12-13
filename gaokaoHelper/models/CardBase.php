<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "_card".
 *
 * @property integer $id
 * @property string $psd
 * @property integer $batch
 * @property integer $operaterid
 * @property string $zkzh
 * @property double $score
 * @property integer $rank
 * @property string $kemu
 * @property double $yuwen
 * @property double $yingyu
 * @property double $shuxue
 * @property double $zonghe
 */
class CardBase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_card';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'batch', 'operaterid', 'rank'], 'integer'],
            [['score', 'yuwen', 'yingyu', 'shuxue', 'zonghe'], 'number'],
            [['psd', 'zkzh'], 'string', 'max' => 32],
            [['kemu'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'psd' => '密码',
            'batch' => 'Batch',
            'operaterid' => 'Operaterid',
            'zkzh' => 'Zkzh',
            'score' => 'Score',
            'rank' => 'Rank',
            'kemu' => 'Kemu',
            'yuwen' => 'Yuwen',
            'yingyu' => 'Yingyu',
            'shuxue' => 'Shuxue',
            'zonghe' => 'Zonghe',
        ];
    }
}
