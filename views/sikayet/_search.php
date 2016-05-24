<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\sikayet\models\SikayetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sikayet-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'yeniID') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'firmaID') ?>

    <?= $form->field($model, 'kategoriID') ?>

    <?= $form->field($model, 'UrunSeriNo') ?>

    <?php // echo $form->field($model, 'SikayetBaslik') ?>

    <?php // echo $form->field($model, 'SikayetMetni') ?>

    <?php // echo $form->field($model, 'SikayetTekrar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
