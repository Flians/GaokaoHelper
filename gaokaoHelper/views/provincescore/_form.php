<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProvinceScore */
/* @var $form yii\widgets\ActiveForm */
use app\models\Province;
?>

<div class="province-score-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'province')->dropdownList(Province::ProvinceList()); ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'art1')->textInput() ?>

    <?= $form->field($model, 'art2')->textInput() ?>

    <?= $form->field($model, 'art3')->textInput() ?>

    <?= $form->field($model, 'science1')->textInput() ?>

    <?= $form->field($model, 'science2')->textInput() ?>

    <?= $form->field($model, 'science3')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
