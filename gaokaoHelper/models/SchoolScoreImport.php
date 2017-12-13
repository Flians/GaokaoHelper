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
class SchoolScoreImport extends \yii\base\Model
{
    /**
     * @var UploadedFile
     */
    public $importfile;
    public $year;
    public $province;
    public $art_science;

    public function rules()
    {
        return [
            [['importfile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'csv'],
            [['year'], 'integer'],
            [['province', 'art_science'], 'string', 'max' => 32],
        ];
    }
    
    public function upload()
    {
            return true;
        if ($this->validate()) {
            //$this->importfile->saveAs('uploads/1234.csv');
            return true;
        } else {
            return false;
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'schooname' => 'Schooname',
            'year' => 'Year',
            'province' => 'Province',
            'art_science' => 'Art Science',
            'plan' => 'Plan',
            'pici' => 'Pici',
            'over_line' => 'Over Line',
            'min_score' => 'Min Score',
            'min_rank' => 'Min Rank',
            'avg_score' => 'Avg Score',
            'avg_overline' => 'Avg Overline',
        ];
    }
}
