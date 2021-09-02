<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;


class UserController extends Controller
{

 


public function beforeAction($action)
{
    if(Yii::$app->user->isGuest){
        //return $this->goHome();
    }else{
        $id = Yii::$app->user->identity->id;
        $user = User::find()->where(['id' => $id])->one();
        if($user->role != 'user'){
          //return $this->goHome();  
        }
    }



 return parent::beforeAction($action);
}


    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
           // 'verbs' => [
            //    'class' => VerbFilter::className(),
           //     'actions' => [
           //         'logout' => ['post'],
           //     ],
            //],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
}