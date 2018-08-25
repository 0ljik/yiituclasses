<?php

namespace common\modules\classes\controllers;

use Yii;
use common\modules\classes\models\MtmAssignment;
use common\modules\classes\models\MtmAssignmentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AssignController implements the CRUD actions for MtmAssignment model.
 */
class AssignController extends Controller
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
     * Lists all MtmAssignment models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MtmAssignmentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MtmAssignment model.
     * @param integer $mta_mtmc_id
     * @param integer $mta_user_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($mta_mtmc_id, $mta_user_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($mta_mtmc_id, $mta_user_id),
        ]);
    }

    /**
     * Creates a new MtmAssignment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MtmAssignment();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mta_mtmc_id' => $model->mta_mtmc_id, 'mta_user_id' => $model->mta_user_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MtmAssignment model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $mta_mtmc_id
     * @param integer $mta_user_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($mta_mtmc_id, $mta_user_id)
    {
        $model = $this->findModel($mta_mtmc_id, $mta_user_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mta_mtmc_id' => $model->mta_mtmc_id, 'mta_user_id' => $model->mta_user_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MtmAssignment model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $mta_mtmc_id
     * @param integer $mta_user_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($mta_mtmc_id, $mta_user_id)
    {
        $this->findModel($mta_mtmc_id, $mta_user_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MtmAssignment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $mta_mtmc_id
     * @param integer $mta_user_id
     * @return MtmAssignment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($mta_mtmc_id, $mta_user_id)
    {
        if (($model = MtmAssignment::findOne(['mta_mtmc_id' => $mta_mtmc_id, 'mta_user_id' => $mta_user_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('classes', 'The requested page does not exist.'));
    }
}
