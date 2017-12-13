<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OperaterBase */

$this->title = '创建服务商';
$this->params['breadcrumbs'][] = ['label' => '服务商管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operater-base-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
