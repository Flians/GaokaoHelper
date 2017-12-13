<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '咨询卡列表';
$this->params['breadcrumbs'][] = ['label' => '服务商管理', 'url' => ['/operater/index']];
$this->params['breadcrumbs'][] = ['label' => $model->operater, 'url' => ['/operater/view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = "第{$batch}批次咨询卡列表";
?>
<div class="card-base-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('导出列表', ['export', 'oid'=>$model->id, 'batch'=>$batch], ['class' => 'btn btn-success', 'target'=>'_blank']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'psd',
            //'batch',
        [
            'attribute'=>'已使用',
            'class' => 'yii\grid\DataColumn', //由于是默认类型，可以省略 
            'value' => function ($data) {
                return $data->zkzh!=null?"是":""; // 如果是数组数据则为 $data['name'] ，例如，使用 SqlDataProvider 的情形。
            },
        ],
            //'operaterid',
            //'zkzh',
            // 'score',
            // 'rank',
            // 'kemu',
            // 'yuwen',
            // 'yingyu',
            // 'shuxue',
            // 'zonghe',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
