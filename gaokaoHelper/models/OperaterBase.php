<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "_operater".
 *
 * @property integer $id
 * @property string $province
 * @property string $zone
 * @property string $operater
 */
class OperaterBase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_operater';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['province'], 'string', 'max' => 32],
            [['zone'], 'string', 'max' => 64],
            [['operater'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '编号',
            'province' => '省份',
            'zone' => '地区',
            'operater' => '服务商',
        ];
    }
}
