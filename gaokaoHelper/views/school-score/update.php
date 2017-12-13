<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolScore */

$this->title = '更新高校分数线: ' . $model->schooname;
$this->params['breadcrumbs'][] = ['label' => '高校分数线', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->schooname, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="school-score-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
