<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AdminBase */

$this->title = '添加管理员';
$this->params['breadcrumbs'][] = ['label' => '管理员列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-base-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
