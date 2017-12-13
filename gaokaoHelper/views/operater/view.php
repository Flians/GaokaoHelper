<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\OperaterBase */

$this->title = $model->operater;
$this->params['breadcrumbs'][] = ['label' => '服务商管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operater-base-view">

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确定删除吗？',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('生成咨询卡', ['generate', 'id' => $model->id], ['class' => 'btn btn-success']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'province',
            'zone',
            'operater',
        ],
    ]) ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            'batch',
            'count',
            'c',
            
        [
            'class' => 'yii\grid\ActionColumn',
            'header' => '操作',
            'template' => '{view}',
            'buttons' => [
                    // 下面代码来自于 yii\grid\ActionColumn 简单修改了下
                    'view' => function ($url, $model, $key) {
                      $options = [
                        'title' => Yii::t('yii', 'View'),
                        'aria-label' => Yii::t('yii', 'View'),
                        'data-pjax' => '0',
                      ];
                      return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', ['card/index','oid'=>$model->operaterid, 'batch'=>$model->batch ], $options);
                    },
            ],
        ],
        ],
    ]); ?>
    
    
</div>
