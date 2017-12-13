<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CardBase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-base-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'psd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batch')->textInput() ?>

    <?= $form->field($model, 'operaterid')->textInput() ?>

    <?= $form->field($model, 'zkzh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'score')->textInput() ?>

    <?= $form->field($model, 'rank')->textInput() ?>

    <?= $form->field($model, 'kemu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yuwen')->textInput() ?>

    <?= $form->field($model, 'yingyu')->textInput() ?>

    <?= $form->field($model, 'shuxue')->textInput() ?>

    <?= $form->field($model, 'zonghe')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
