<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProvinceScore */

$this->title = '添加控制分数线';
$this->params['breadcrumbs'][] = ['label' => '控制分数线', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="province-score-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
