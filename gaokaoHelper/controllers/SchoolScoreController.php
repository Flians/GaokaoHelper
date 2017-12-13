<?php

namespace app\controllers;

use Yii;
use app\models\SchoolScore;
use app\models\SchoolScoreSearch;
use app\models\SchoolScoreImport;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SchoolScoreController implements the CRUD actions for SchoolScore model.
 */
class SchoolScoreController extends Controller
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
     * Lists all SchoolScore models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SchoolScoreSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all SchoolScore models.
     * @return mixed
     */
    public function actionImport()
    {
        $model = new SchoolScoreImport();

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            $model->importfile = UploadedFile::getInstance($model, 'importfile');
            
            if (!$fp = fopen($model->importfile->tempName, 'r')) {
                return false;
            }
            $i = $j = 0;
            $data = array();
            while (!feof($fp)) {
                $data2 = eval('return '.iconv('gbk','utf-8',var_export(fgetcsv($fp),true)).';');
                $data[] = $data2;
                //$data[] = fgetcsv($fp);
            }
            fclose($fp);
                var_dump($data);
            return;
                //var_dump($model);
            if ($model->upload()) {
                // 文件上传成功
                //return;
                var_dump($model);
                echo readfile($model->importfile->tempName);
                return;
            }
        }

        return $this->render('import', ['model' => $model]);
    }

    /**
     * Displays a single SchoolScore model.
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
     * Creates a new SchoolScore model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SchoolScore();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SchoolScore model.
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
     * Deletes an existing SchoolScore model.
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
     * Finds the SchoolScore model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SchoolScore the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SchoolScore::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
