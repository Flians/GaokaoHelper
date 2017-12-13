<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "_admin".
 *
 * @property string $username
 * @property string $psd
 * @property string $level
 * @property integer $operaterid
 */
class AdminBase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['operaterid'], 'integer'],
            [['username', 'level'], 'string', 'max' => 32],
            [['psd'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => '用户名',
            'psd' => '密码',
            'level' => '用户级别',
            'operaterid' => '服务商编号',
        ];
    }
}
