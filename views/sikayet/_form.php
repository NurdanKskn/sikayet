<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\sikayet\models\Sikayet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sikayet-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'firmaID')->dropdownList($firma) ?>

    <?= $form->field($model, 'kategoriID')->dropdownList($kategori) ?>

    <?= $form->field($model, 'UrunSeriNo')->textInput() ?>

    <?= $form->field($model, 'SikayetBaslik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SikayetMetni')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'SikayetTekrar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
