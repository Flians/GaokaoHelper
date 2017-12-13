<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolScore */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-score-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'schooname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'art_science')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plan')->textInput() ?>

    <?= $form->field($model, 'pici')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'over_line')->textInput() ?>

    <?= $form->field($model, 'min_score')->textInput() ?>

    <?= $form->field($model, 'min_rank')->textInput() ?>

    <?= $form->field($model, 'avg_score')->textInput() ?>

    <?= $form->field($model, 'avg_overline')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
