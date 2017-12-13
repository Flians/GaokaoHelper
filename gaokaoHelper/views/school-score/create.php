<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SchoolScore */

$this->title = '添加';
$this->params['breadcrumbs'][] = ['label' => '高校分数线', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-score-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
