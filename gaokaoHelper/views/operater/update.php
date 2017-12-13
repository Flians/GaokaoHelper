<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OperaterBase */

$this->title = '更新服务商: ' . $model->operater;
$this->params['breadcrumbs'][] = ['label' => '服务商管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->operater, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="operater-base-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
