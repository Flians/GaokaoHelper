<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolBase */

$this->title = '更新学校数据: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '学校数据库', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="school-base-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
