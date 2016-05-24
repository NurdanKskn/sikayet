<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\sikayet\models\Sikayet */

$this->title = $model->yeniID;
$this->params['breadcrumbs'][] = ['label' => 'Sikayets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sikayet-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->yeniID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->yeniID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'yeniID',
            'id',
            'firmaID',
            'kategoriID',
            'UrunSeriNo',
            'SikayetBaslik',
            'SikayetMetni:ntext',
            'SikayetTekrar',
        ],
    ]) ?>

</div>
