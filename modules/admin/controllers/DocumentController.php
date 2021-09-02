<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\DocumentPage;
use app\models\UploadPage;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * DocumentController implements the CRUD actions for DocumentPage model.
 */
class DocumentController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all DocumentPage models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => DocumentPage::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DocumentPage model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new DocumentPage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DocumentPage();
        $form = new UploadPage();
        if(Yii::$app->request->post()){
            $data = Yii::$app->request->post();
            $form->img = UploadedFile::getInstance($model, 'img');
            $file_url = $form->upload();
            if($file_url){
                $model->name = $data['DocumentPage']['name'];
                $model->img = $file_url;
                if($model->save()){
                    return $this->refresh();
                }else{
                    var_dump($model->getErrors());
                }
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }


    /**
     * Updates an existing DocumentPage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $form = new UploadPage();
        if(Yii::$app->request->post()){
            $data = Yii::$app->request->post();
            $form->img = UploadedFile::getInstance($model, 'img');
            $file_url = $form->upload();
            if($file_url){
                $model->name = $data['DocumentPage']['name'];
                $model->img = $file_url;
                if($model->save()){
                    return $this->refresh();
                }else{
                    var_dump($model->getErrors());
                }

            }else{
                $model->name = $data['DocumentPage']['name'];
                if($model->save()){
                    return $this->refresh();
                }
            }
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DocumentPage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DocumentPage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DocumentPage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DocumentPage::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
