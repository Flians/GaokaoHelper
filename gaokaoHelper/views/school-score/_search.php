<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolScoreSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-score-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'schooname') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'province') ?>

    <?= $form->field($model, 'art_science') ?>

    <?php // echo $form->field($model, 'plan') ?>

    <?php // echo $form->field($model, 'pici') ?>

    <?php // echo $form->field($model, 'over_line') ?>

    <?php // echo $form->field($model, 'min_score') ?>

    <?php // echo $form->field($model, 'min_rank') ?>

    <?php // echo $form->field($model, 'avg_score') ?>

    <?php // echo $form->field($model, 'avg_overline') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
