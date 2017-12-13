<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProvinceScore */

$this->title = $model->year.$model->province;
$this->params['breadcrumbs'][] = ['label' => '控制分数线', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="province-score-view">


    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'province',
            'year',
            'art1',
            'art2',
             'art3',
             'science1',
             'science2',
             'science3',
        ],
    ]) ?>

</div>
