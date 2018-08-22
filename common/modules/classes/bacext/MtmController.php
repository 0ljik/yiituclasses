<?php

namespace common\modules\classes\controllers;

use Yii;
use common\modules\classes\models\Mtm;
use common\modules\classes\models\MtmSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MtmController implements the CRUD actions for Mtm model.
 */
class MtmController extends Controller
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
     * Lists all Mtm models.
     * @return mixed
     */
/*    public function actionIndex()
    {
        $searchModel = new MtmSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
INDEX ON CHILD
*/
    /**
     * Displays a single Mtm model.
     * @param integer $group_id
     * @param integer $subject_id
     * @param integer $class_subject_id
     * @param integer $class_assets_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
/*  public function actionView($group_id, $subject_id, $class_subject_id, $class_assets_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($group_id, $subject_id, $class_subject_id, $class_assets_id),
        ]);
    }

VIEW IS ON CHILD
*/

    /**
     * Creates a new Mtm model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Mtm();
        $request = Yii::$app->request;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'group_id' => $model->group_id, 'subject_id' => $model->subject_id, 'class_subject_id' => $model->class_subject_id, 'class_assets_id' => $model->class_assets_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Mtm model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $group_id
     * @param integer $subject_id
     * @param integer $class_subject_id
     * @param integer $class_assets_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($group_id, $subject_id, $class_subject_id, $class_assets_id)
    {
        $model = $this->findModel($group_id, $subject_id, $class_subject_id, $class_assets_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'group_id' => $model->group_id, 'subject_id' => $model->subject_id, 'class_subject_id' => $model->class_subject_id, 'class_assets_id' => $model->class_assets_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Mtm model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $group_id
     * @param integer $subject_id
     * @param integer $class_subject_id
     * @param integer $class_assets_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionMtmDelete($group_id, $subject_id, $class_subject_id, $class_assets_id)
    {
        $this->findMtmModel($group_id, $subject_id, $class_subject_id, $class_assets_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Mtm model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $group_id
     * @param integer $subject_id
     * @param integer $class_subject_id
     * @param integer $class_assets_id
     * @return Mtm the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findMtmModel($group_id, $subject_id, $class_subject_id, $class_assets_id)
    {
        if (($model = Mtm::findOne(['group_id' => $group_id, 'subject_id' => $subject_id, 'class_subject_id' => $class_subject_id, 'class_assets_id' => $class_assets_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('classes', 'The requested page does not exist.'));
    }
    /**
     * Finds the Assign model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $mtm_id
     * @param integer $user_id
     * @return Assign the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findassignModel($mtm_id, $user_id)
    {
        if (($model = Assign::findOne(['mtm_id' => $mtm_id, 'user_id' => $user_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('classes', 'The requested page does not exist.'));
    }
    /**
     * Finds the ClassAssets model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ClassAssets the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ClassAssets::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('classes', 'The requested page does not exist.'));
    }

}
