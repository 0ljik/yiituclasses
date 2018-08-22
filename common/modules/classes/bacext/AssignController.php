<?php

namespace common\modules\classes\controllers;

use Yii;
use common\modules\classes\models\Assign;
use common\modules\classes\models\AssignSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AssignController implements the CRUD actions for Assign model.
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
     * Lists all Assign models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AssignSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Assign model.
     * @param integer $mtm_id
     * @param integer $user_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($mtm_id, $user_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($mtm_id, $user_id),
        ]);
    }

    /**
     * Creates a new Assign model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Assign();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mtm_id' => $model->mtm_id, 'user_id' => $model->user_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Assign model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $mtm_id
     * @param integer $user_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($mtm_id, $user_id)
    {
        $model = $this->findModel($mtm_id, $user_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mtm_id' => $model->mtm_id, 'user_id' => $model->user_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Assign model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $mtm_id
     * @param integer $user_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($mtm_id, $user_id)
    {
        $this->findModel($mtm_id, $user_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Assign model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $mtm_id
     * @param integer $user_id
     * @return Assign the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($mtm_id, $user_id)
    {
        if (($model = Assign::findOne(['mtm_id' => $mtm_id, 'user_id' => $user_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('classes', 'The requested page does not exist.'));
    }
}
