<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "_province".
 *
 * @property integer $id
 * @property string $name
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_province';
    }
    /**
     * @inheritdoc
     */
    public static function ProvinceList()
    {
    	$list = Province::find()->select(['name'])->indexBy('name')->column();
        return $list;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '编号',
            'name' => '名称',
        ];
    }
    
    public function getOperater()
    {
    	return $this->hasMany(OperaterBase::className(), ['id' => 'pid']);
    }
}
