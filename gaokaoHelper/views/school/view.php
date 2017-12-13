<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolBase */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '学校数据库', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-base-view">

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->code], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->code], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [            'code',
            'name',
            'title',
            'locate',
            'belong',
            'rank',
            'uni_col',
            'type',
        ],
    ]) ?>

</div>
