<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "_province_score".
 *
 * @property integer $id
 * @property string $province
 * @property integer $year
 * @property integer $art1
 * @property integer $art2
 * @property integer $art3
 * @property integer $science1
 * @property integer $science2
 * @property integer $science3
 */
class ProvinceScore extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_province_score';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['year', 'art1', 'art2', 'art3', 'science1', 'science2', 'science3'], 'integer'],
            [['province'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'province' => '省份',
            'year' => '年份',
            'art1' => '文科一批',
            'art2' => '文科二批',
            'art3' => '文科三批',
            'science1' => '理科一批',
            'science2' => '理科二批',
            'science3' => '理科三批',
        ];
    }
}
