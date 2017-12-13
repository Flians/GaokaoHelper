<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "_school".
 *
 * @property integer $code
 * @property string $name
 * @property string $rank
 * @property string $pici
 * @property string $type
 * @property string $locate
 */
class SchoolBase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_school';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'locate'], 'string', 'max' => 128],
            [['title', 'belong', 'rank'], 'string', 'max' => 64],
            [['uni_col', 'type'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'name' => '名称',
            'title' => '属性',
            'locate' => '所在地',
            'belong' => '隶属',
            'rank' => '学历层次',
            'uni_col' => '办学类型',
            'type' => '院校类型',
        ];
    }
}
