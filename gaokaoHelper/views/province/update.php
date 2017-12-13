<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Province */

$this->title = '修改省份: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '省份管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="province-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
