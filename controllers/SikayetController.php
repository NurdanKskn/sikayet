<?php

namespace backend\modules\sikayet\controllers;

use Yii;
use backend\modules\sikayet\models\Sikayet;
use backend\modules\sikayet\models\SikayetSearch;
use backend\modules\sikayet\models\Kategori;
use backend\modules\sikayet\models\Firma;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
/**
 * SikayetController implements the CRUD actions for Sikayet model.
 */
class SikayetController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Sikayet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SikayetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sikayet model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Sikayet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
		
        $model = new Sikayet();
		$kategori = ArrayHelper::map(Kategori::find()->all(),'kategoriID','KategoriAdi');
        $firma = ArrayHelper::map(Firma::find()->all(),'firmaID','FirmaAdi');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->yeniID]);
        } else {
            return $this->render('create', [
                'model' => $model,
				'kategori' => $kategori,
				'firma' => $firma,
            ]);
        }
		
    }

    /**
     * Updates an existing Sikayet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
		$kategori = ArrayHelper::map(Kategori::find()->all(),'kategoriID','KategoriAdi');
        $firma = ArrayHelper::map(Firma::find()->all(),'firmaID','FirmaAdi');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->yeniID]);
        } else {
            return $this->render('update', [
                'model' => $model,
				'kategori' => $kategori,
				'firma' => $firma,
            ]);
        }
    }

    /**
     * Deletes an existing Sikayet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sikayet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sikayet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sikayet::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
