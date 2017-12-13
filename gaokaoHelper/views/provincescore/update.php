<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProvinceScore */

$this->title = '更新控制分数线';
$this->params['breadcrumbs'][] = ['label' => '控制分数线', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="province-score-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
