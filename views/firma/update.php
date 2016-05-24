<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\sikayet\models\Firma */

$this->title = 'Update Firma: ' . $model->firmaID;
$this->params['breadcrumbs'][] = ['label' => 'Firmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->firmaID, 'url' => ['view', 'id' => $model->firmaID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="firma-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
