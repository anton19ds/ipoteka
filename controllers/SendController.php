<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\LoginForm;
use app\models\Articles;
use app\models\ContactForm;
use app\controllers\MainController;

class SendController extends MainController
{
	public function actionSms(){
		if (Yii::$app->request->isAjax) {
			$data = Yii::$app->request->post();
			$phone = str_replace("-", "", $data['val']);
			print_r($phone);
		}
	}

}