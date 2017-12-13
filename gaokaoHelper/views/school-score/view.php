<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolScore */

$this->title = $model->schooname;
$this->params['breadcrumbs'][] = ['label' => '高校分数线', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-score-view">

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
            'id',
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
        ],
    ]) ?>

</div>
