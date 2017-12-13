<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SchoolBase */

$this->title = '添加学校数据';
$this->params['breadcrumbs'][] = ['label' => '学校数据库', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-base-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
