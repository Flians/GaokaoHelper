<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OperaterBase */

$this->title =  $model->operater." 生成资讯卡";
$this->params['breadcrumbs'][] = ['label' => '服务商管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->operater, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '生成资讯卡';
?>
<div class="operater-base-update">


          
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model2, 'count')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('创建', ['class' =>'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
