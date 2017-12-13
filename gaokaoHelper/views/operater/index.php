<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OperaterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '服务商管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operater-base-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('录入服务商', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'province',
            'zone',
            'operater',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
