<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CardBase */

$this->title = 'Update Card Base: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Card Bases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="card-base-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
