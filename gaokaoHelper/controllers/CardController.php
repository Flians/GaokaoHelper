<?php

namespace app\controllers;

use Yii;
use app\models\CardBase;
use app\models\CardSearch;
use app\models\OperaterBase;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

/**
 * CardController implements the CRUD actions for CardBase model.
 */
class CardController extends Controller
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
     * Lists all CardBase models.
     * @return mixed
     */
    public function actionIndex($oid, $batch)
    {
        $query = CardBase::find()->where(['operaterid'=>$oid, 'batch'=>$batch]);

        $provider = new ActiveDataProvider([
        'query' => $query,
        'pagination' => [
            'pageSize' => 100,
        ],
        ]);

        $model=OperaterBase::findOne($oid);
                return $this->render('index', [
                'model' => $model,
                'batch' => $batch,
            'dataProvider' => $provider,
        ]);
    }

    /**
     * Displays a single CardBase model.
     * @param integer $id
     * @return mixed
     */
    public function actionExport($oid, $batch)
    {
        $model=OperaterBase::findOne($oid);
        $file_name = iconv('utf-8','gbk//TRANSLIT',$model->operater."第{$batch}批次咨询卡列表.csv");
            
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . $file_name);
        if (!empty($header_data)) {
            echo iconv('utf-8','gbk//TRANSLIT','"'.implode('","',$header_data).'"'."\n");
        }
        
        $output = array();
        $output[] = "id";
        $output[] = "密码";
        echo iconv('utf-8','gbk//TRANSLIT','"'.implode('","', $output)."\"\n");
    
        $query = CardBase::find(["psd", "id"])->where(['operaterid'=>$oid, 'batch'=>$batch]);
        foreach ($query->each() as $key => $value) {
            $output = array();
            $output[] = $value['id'];
            $output[] = $value['psd'];
            echo iconv('utf-8','gbk//TRANSLIT','"'.implode('","', $output)."\"\n");
        }
    }

    /**
     * Displays a single CardBase model.
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
     * Creates a new CardBase model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CardBase();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CardBase model.
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
     * Deletes an existing CardBase model.
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
     * Finds the CardBase model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CardBase the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CardBase::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
