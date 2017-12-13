<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CardBase */

$this->title = '设置年份';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card-base-update">


    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('设置', ['class' =>  'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
