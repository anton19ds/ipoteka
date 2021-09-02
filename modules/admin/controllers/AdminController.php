<?php

namespace app\modules\admin\controllers;


use Yii;
use yii\web\Controller;
use app\modules\admin\controllers\MainController;
use app\models\LoginForm;
use app\models\User;
/**
 * Default controller for the `admin` module
 */
class AdminController extends MainController
{
    public function actionIndex(){
        $user = User::find()->all();
        return $this->render('index', [
            'user' => $user
        ]);

    }

   
    public function actionLogin(){
        $model = new LoginForm();
        if(Yii::$app->request->post()){
            if($model->load(Yii::$app->request->post()) ){
                if($model->login()){
                    return $this->redirect('/admin');    
                }else{
                    var_dump($model->getErrors());
                }
                
            }
        }
        return $this->render('login',[
            'model' => $model,
        ]);
    }
}
