<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\sikayet\models\SikayetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sikayets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sikayet-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sikayet', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'yeniID',
            'id',
            'firmaID',
            'kategoriID',
            'UrunSeriNo',
            // 'SikayetBaslik',
            // 'SikayetMetni:ntext',
            // 'SikayetTekrar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
