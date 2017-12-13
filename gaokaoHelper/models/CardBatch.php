<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "_card_batch".
 *
 * @property integer $id
 * @property integer $operaterid
 * @property integer $batch
 * @property integer $count
 */
class CardBatch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_card_batch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['operaterid', 'batch', 'count'], 'integer'],
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
            'count' => '数量',
        ];
    }

    /**
     * @inheritdoc
     */
    public function save($runValidation = true, $attributeNames = NULL)
    {
    	$list = CardBatch::find()->select(['max(batch) as max'])->where(['operaterid'=>$this->operaterid])->column();
    	$this->batch = $list[0]+1;
    	$r = parent::save($runValidation, $attributeNames);
    	if($r){
    		$post = Yii::$app->db->createCommand('LOCK TABLE _card WRITE;')->execute();
    		var_dump($post);
    		$start = CardBase::find()->select('max(id)')->column()[0];
    		var_dump($start);
    		if($start == null || $start == 0){
    			$start = 20000001;
    		}
    		$batch = [];
    		for($i=1; $i<=$this->count; $i++){
    			/*
    			$tmp = new CardBase();
    			$tmp->id = $start + $i;
    			$tmp->psd = substr(base64_encode(uniqid()), 13, 4).mt_rand(1000, 9999);
    			$tmp->batch = $this->batch;
    			$tmp->operaterid = $this->operaterid;
    			$tmp->save();*/
    			$batch[] = [$start + $i, substr(base64_encode(uniqid()), 13, 3).mt_rand(10000, 99999), $this->batch, $this->operaterid];
    		}
    		$t = Yii::$app->db->createCommand()->batchInsert('_card', ['id', 'psd', 'batch', 'operaterid'], $batch)->execute();
    		var_dump($t);
    		$post = Yii::$app->db->createCommand('UNLOCK TABLES;')->execute();
    	}
    	return $r;
    }
    
    
}
