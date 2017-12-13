<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SchoolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '学校数据库';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-base-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加学校数据', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'code',
            'name',
            'title',
            'locate',
            'belong',
             'rank',
             'uni_col',
             'type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
