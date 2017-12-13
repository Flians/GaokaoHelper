<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolScore */

$this->title = "import";
$this->params['breadcrumbs'][] = ['label' => 'School Scores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-score-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('下载模板文件', ['update'], ['class' => 'btn btn-primary']) ?>
    </p>
    
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'province')?>
    <?= $form->field($model, 'art_science')?>
    <?= $form->field($model, 'year') ?>
    <?= $form->field($model, 'importfile')->fileInput() ?>

    <button>Submit</button>

    <?php ActiveForm::end() ?>

</div>
