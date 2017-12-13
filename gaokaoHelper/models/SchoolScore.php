<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "_school_score".
 *
 * @property integer $id
 * @property string $schooname
 * @property integer $year
 * @property string $province
 * @property string $art_science
 * @property integer $plan
 * @property string $pici
 * @property integer $over_line
 * @property integer $min_score
 * @property integer $min_rank
 * @property integer $avg_score
 * @property integer $avg_overline
 */
class SchoolScore extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_school_score';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['year', 'plan', 'over_line', 'min_score', 'min_rank', 'avg_score', 'avg_overline'], 'integer'],
            [['schooname'], 'string', 'max' => 128],
            [['province', 'art_science', 'pici'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'schooname' => '学校',
            'year' => '年份',
            'province' => '省份',
            'art_science' => '分科',
            'plan' => '计划人数',
            'pici' => '批次',
            'over_line' => '线差',
            'min_score' => '最低分',
            'min_rank' => '位次',
            'avg_score' => '平均分',
            'avg_overline' => '平均分线差',
        ];
    }
}
