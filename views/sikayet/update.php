<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\sikayet\models\Sikayet */

$this->title = 'Update Sikayet: ' . $model->yeniID;
$this->params['breadcrumbs'][] = ['label' => 'Sikayets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->yeniID, 'url' => ['view', 'id' => $model->yeniID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sikayet-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
		'kategori' => $kategori,
		'firma' => $firma,
    ]) ?>

</div>
