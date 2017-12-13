<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProvinceScoreS */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '控制分数线';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="province-score-index">
<section>
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>
</section>

<section>
    <p>
        <?= Html::a('添加控制分数线', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [

            'province',
            'year',
            'art1',
            'art2',
             'art3',
             'science1',
             'science2',
             'science3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</section>
</div>
