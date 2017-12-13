<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CardSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-base-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'psd') ?>

    <?= $form->field($model, 'batch') ?>

    <?= $form->field($model, 'operaterid') ?>

    <?= $form->field($model, 'zkzh') ?>

    <?php // echo $form->field($model, 'score') ?>

    <?php // echo $form->field($model, 'rank') ?>

    <?php // echo $form->field($model, 'kemu') ?>

    <?php // echo $form->field($model, 'yuwen') ?>

    <?php // echo $form->field($model, 'yingyu') ?>

    <?php // echo $form->field($model, 'shuxue') ?>

    <?php // echo $form->field($model, 'zonghe') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
