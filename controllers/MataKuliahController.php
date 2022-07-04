<?php

namespace app\controllers;

use app\models\MataKuliah;
use app\models\MataKuliahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MataKuliahController implements the CRUD actions for MataKuliah model.
 */
class MataKuliahController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all MataKuliah models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MataKuliahSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MataKuliah model.
     * @param int $id_matkul Id Matkul
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_matkul)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_matkul),
        ]);
    }

    /**
     * Creates a new MataKuliah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MataKuliah();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_matkul' => $model->id_matkul]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MataKuliah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_matkul Id Matkul
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_matkul)
    {
        $model = $this->findModel($id_matkul);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_matkul' => $model->id_matkul]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MataKuliah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_matkul Id Matkul
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_matkul)
    {
        $this->findModel($id_matkul)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MataKuliah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_matkul Id Matkul
     * @return MataKuliah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_matkul)
    {
        if (($model = MataKuliah::findOne(['id_matkul' => $id_matkul])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
