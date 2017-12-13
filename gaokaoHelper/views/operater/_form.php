<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OperaterBase */
/* @var $form yii\widgets\ActiveForm */

use app\models\Province;

?>

<div class="operater-base-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'province')->dropdownList(Province::ProvinceList()); ?>
    	
    <?= $form->field($model, 'zone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'operater')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
