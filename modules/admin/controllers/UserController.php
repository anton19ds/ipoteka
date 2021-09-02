<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\User;
use app\models\UserInfo;
use app\models\UserParam;
use app\models\LoadDocumet;
use app\models\Applications;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\DocumentZapros;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $docZapros = new DocumentZapros();
        $listDocZapros = DocumentZapros::find()->where(['user_id'=>$id])->all();
        if(Yii::$app->request->post()){
            if($docZapros->load(Yii::$app->request->post()) && $docZapros->validate()){
                if($docZapros->save()){
                    return $this->refresh();
                }
            }
        }
        $this->view->registerJsFile("/js/admin.js", ['depends' => 'yii\web\JqueryAsset']);
        return $this->render('view', [
            'id' => $id,
            'model' => $this->findModel($id),
            'userInfo' => UserInfo::find()->where(['user_id' => $id])->one(),
            'userParam' => UserParam::find()->where(['user_id' => $id])->one(),
            'loadDocument' => LoadDocumet::find()->where(['user_id' => $id])->all(),
            'docZapros' => $docZapros,
            'listDocZapros' => $listDocZapros
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }


    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $userInfo = UserInfo::find()->where(['user_id' => $id])->one();
        $userParam = UserParam::find()->where(['user_id' => $id])->one();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'userInfo' => $userInfo,
            'userParam' => $userParam
        ]);
    }

    /**
     * Deletes an existing User model.
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

    public function actionApplications($id){
        $model = Applications::find()->where(['user_id' => $id])->all();
        return $this->render('applications', [
            'model' => $model
        ]);
    }

    public function actionDocTextZapros(){
        if(Yii::$app->request->isAjax){
            $data = Yii::$app->request->post();
            $model = DocumentZapros::find()->where(['id' => $data['id']])->one();
            if(!empty($model)){
                return $model->text;
            }
        }
    }


    public function actionTextMesseg(){
        if(Yii::$app->request->isAjax){
            $data = Yii::$app->request->post();
            $id = Yii::$app->user->identity->id;
            $docZapros = new DocumentZapros();
            $docZapros->user_send = $id;
            $docZapros->user_id = $data['id'];
            $docZapros->text = $data['text'];
                if($docZapros->save()){
                    Yii::$app->session->setFlash('send-success', "Сообщение отправлено");
                    return true;
                }
        }
}
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
