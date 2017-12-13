<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProvinceScoreS */
/* @var $form yii\widgets\ActiveForm */
use app\models\Province;
?>

<div class="province-score-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<div class="col-md-5">
    <?= $form->field($model, 'province')->dropdownList($model::find()->select(['province'])->indexBy('province')->column()); ?>
</div>
<div class="col-md-5">
    <?= $form->field($model, 'year')->dropdownList($model::find()->select(['year'])->indexBy('year')->column()); ?>
</div>



    <div class="form-group col-md-2">
        <?= Html::submitButton('筛选', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
