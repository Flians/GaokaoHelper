<?php

namespace app\controllers;

use Yii;
use app\models\OperaterBase;
use app\models\OperaterSearch;
use app\models\CardBatch;
use app\models\CardCount;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

/**
 * OperaterController implements the CRUD actions for OperaterBase model.
 */
class OperaterController extends Controller
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
     * Lists all OperaterBase models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OperaterSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OperaterBase model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $query = CardCount::find()->where(['operaterid'=>$id])->orderBy([
            'id' => SORT_DESC,
        ]);

    $provider = new ActiveDataProvider([
        'query' => $query,
        'pagination' => [
            'pageSize' => 10,
        ],
    ]);
        return $this->render('view', [
            'model' => $this->findModel($id),
            'dataProvider' => $provider,
        ]);
    }

    /**
     * Creates a new OperaterBase model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new OperaterBase();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing OperaterBase model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing OperaterBase model.
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
     * Lists all OperaterBase models.
     * @return mixed
     */
    public function actionGenerate($id)
    {
        $model = $this->findModel($id);
        $model2 = new CardBatch();
        $model2->operaterid = $id;

        if ($model2->load(Yii::$app->request->post()) && $model2->save()) {
            return $this->redirect(['/card/index', 'oid' => $id, 'batch'=>$model2->batch]);
        } else {
            return $this->render('generate', [
                'model' => $model,
                'model2' => $model2,
            ]);
        }
    }

    /**
     * Finds the OperaterBase model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return OperaterBase the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = OperaterBase::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
