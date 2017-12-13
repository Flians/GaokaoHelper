<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SchoolScoreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '高校分数线';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-score-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('导入', ['import'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'schooname',
            'year',
            'province',
            'art_science',
             'plan',
             'pici',
             'over_line',
             'min_score',
             'min_rank',
             'avg_score',
             'avg_overline',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
