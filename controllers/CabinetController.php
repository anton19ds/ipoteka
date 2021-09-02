<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\LoginForm;
use app\models\User;
use app\models\ContactForm;
use app\models\UserParam;
use app\models\UserInfo;
use app\models\UploadForm;
use app\models\LoadDocumet;
use app\models\UserParamsInquiry;
use yii\web\UploadedFile;
use app\controllers\UserController;
use yii\httpclient\Client;

class CabinetController extends UserController
{
	public function actionRegister(){
		if(Yii::$app->request->isAjax){
			$data = Yii::$app->request->post();
			if(empty($data['regEmail'])
				|| empty($data['regPass'])
				|| empty($data['regPhone']) 
				|| empty($data['regName'])
				|| empty($data['regSurname'])
				|| empty($data['regRepass']))
			{
				$error = array('error' => '1','messege'=>'Не все поля заполнены' );
				$stingJson = json_encode($error);
				return $stingJson;

			}elseif($data['regPass'] != $data['regRepass']){
				$error = array('error' => '1','messege'=>'Не все поля заполнены' );
				$stingJson = json_encode($error);
				return $stingJson;
			}else{
				$model = new User();
				$model->username = $data['regEmail'];
				$model->password = $data['regPass'];
				$model->phone = $data['regPhone'];
				$model->emai = $data['regEmail'];
				$model->name = $data['regName'];
				$model->surname = $data['regSurname'];
				if($model->save()){
					$user = new LoginForm();
					$user->username = $model->username;
					$user->password = $model->password;
					$user->rememberMe = true;

					if($user->login()){
						$error = array('error' => '200','messege'=>'Не все поля заполнены' );
						$stingJson = json_encode($error);
						return $stingJson;	
					}
				}				
			}
			//$data['regRepass']
			//print_r($data);
		}
	}

	public function actionLogin(){
		$model = new LoginForm();
		if(Yii::$app->request->post()){
			$data = Yii::$app->request->post();
			if($model->load($data) && $model->login()){
				return $this->redirect('/cabinet/reg-one');
			}
			
		}
		return $this->render('login',[
			"model" => $model
		]);
	} 

	public function actionLoginCode(){
		return $this->render('logCod');
	}

	public function actionIndex(){
		$id = Yii::$app->user->identity->id;
		$user = User::find()->where(['id' => $id])->one();

		
		if(UserParam::find()->where(['user_id'=>$id])->exists()){
			$userParam = UserParam::find()->where(['user_id'=>$id])->one();
		}else{
			return $this->redirect('/cabinet/reg-two');
		}

		if(UserInfo::find()->where(['user_id'=>$id])->exists()){
			$userInfo = UserInfo::find()->where(['user_id'=>$id])->one();	
		}else{
			return $this->redirect('cabinet/reg-tree');
		}

		
		return $this->render('index',[
			'user' => $user,
			'userParam' => $userParam,
			'userInfo' => $userInfo

		]);
	}

	public function actionInfo(){
		return $this->render('info');
	}

	public function actionRegOne(){
		if(!Yii::$app->user->isGuest){
			$id = Yii::$app->user->identity->id;
			$model = User::find()->where(['id' => $id])->one();
			if(Yii::$app->request->post()){
			    $data = Yii::$app->request->post();
				if($model->load($data)){
					$model->rePass = $model->password;
                    $session = Yii::$app->session;
                    $smsCode = $session->get('smsCode');
                    if($data['User']['smsCode'] == $smsCode){
                        if($model->save()){
                            return $this->redirect('/cabinet/reg-two');
                        }
                    }else{
                        Yii::$app->session->setFlash('error', "Код потверждения не прощел, попробуйте ещй раз");
                        return $this->refresh();
                    }
					//var_dump(Yii::$app->request->post());

					
				}else{
					return var_dump($model->getErrors());
				}		
			}

		}else{
			return $this->goHome();
		}
		return $this->render('one',[
			'model' => $model,
		]);
	}



	public function actionRegTwo(){


		if(!Yii::$app->user->isGuest){
			$id = Yii::$app->user->identity->id;
			if(UserParam::find()->where(['user_id' => $id])->exists()){
				$model = UserParam::find()->where(['user_id' => $id])->one();
			}else{
				$model = new UserParam();
			}
		}else{
			return $this->goHome();
		}
		if(Yii::$app->request->post()){
			$data = Yii::$app->request->post();
			if($model->load($data)){
				$data_issue = $data['UserParam']['day_b'].'-'.$data['UserParam']['mon_b'].'-'.$data['UserParam']['yer_b'];
				$model->data_issue = $data_issue;
				$year_birth = $data['UserParam']['day_v'].'-'.$data['UserParam']['mon_v'].'-'.$data['UserParam']['yer_v'];
				$model->year_birth = $year_birth;
				if($model->save()){
					return $this->redirect('/cabinet/reg-tree');
				}
			}
		}
		return $this->render('two',[
			'model' => $model,
			'id' => $id
		]);
	}





	public function actionRegTree(){
		if(!Yii::$app->user->isGuest){
			$id = Yii::$app->user->identity->id;
			if(UserInfo::find()->where(['user_id'=>$id])->exists()){
				$model = UserInfo::find()->where(['user_id' => $id])->one();
			}else{
				$model = new UserInfo();
			}
		}else{
			return $this->goHome();
		}

		if(Yii::$app->request->post()){
			$data = Yii::$app->request->post();
			if($model->load($data)){
				if($model->save()){
					return $this->redirect('/cabinet');
				}
			}
		}
		return $this->render('tree',[
			'model' => $model,
			'id' => $id
		]);
	}


	public function actionNewUser(){
		if(Yii::$app->user->isGuest){
			$model = new User();
			if(Yii::$app->request->post()){
				$data = Yii::$app->request->post();
				if($model->load($data)){
                    $model->username = $data['User']['emai'];
                    $model->password = 'Q!'.rand(0,999).'dF'.rand(0,999);
					if($model->save()){
						$login = new LoginForm();
						$login->username = $model->username;
						$login->password = $model->password;
						if($login->login()){
							return $this->redirect('/cabinet/reg-one');							
						}
					}else{
					    var_dump($model->getErrors());
                    }
				}
			}
			return $this->render('newUser',[
				'model' => $model,
			]);
		}else{
			return $this->goHome();
		}
	}
	public function actionDatacode(){
		if(Yii::$app->request->isAjax){
			$data = Yii::$app->request->post();
			$token = "bddc05607b81d236b3f720bfca2d1828d6ea3c0b";
			$secret = "72ef796a733881b64d5fd61ee562483f7364021b";
			$dadata = new \Dadata\DadataClient($token, $secret);
			$result2 = $dadata->suggest("fms_unit", $data['val']);
			$counRes = count($result2);
			//print_r(count($result2));
			if($counRes != 0){
				$counRes2 = $counRes - 1;
				return  $result2[$counRes2]['value'];
			}
			//print_r($result2);
			//print_r($result2['1']['value']);
			//return  $result2['1']['value'];
		}else{
			return $this->goHome();
		}
	}

	public function actionDocument(){
		if(Yii::$app->user->isGuest){
			return $this->goHome();
		}else{
			$user_id = Yii::$app->user->identity->id;
		}
		$model = new UploadForm();
		if(Yii::$app->request->post()){
			$data = Yii::$app->request->post();
			$model->imageFile = UploadedFile::getInstance($model, 'imageFile');
			$file_url = $model->upload();
			  if ($file_url){
			  	$userDoc = new LoadDocumet();
			  	$userDoc->user_id = $user_id; 
			  	$userDoc->name = $model->imageFile->name; 
			  	$userDoc->src = $file_url;
			  	if($userDoc->save()){
			  		return $this->refresh();
			  	}else{
			  		var_dump($userDoc->getErrors());
			  	}
            }
		}
		$loadUser = LoadDocumet::find()->where(['user_id' => $user_id])->all();
		return $this->render('document',[
			'model' => $model,
			'loadUser' => $loadUser
		]);
	}

	public function actionDatapass(){
		if(Yii::$app->request->isAjax){
			$data = Yii::$app->request->post();
			$arr = $pieces = explode("-", $data['vas']);
			$pass = $arr['0']." ".$arr['1'];
			$token = "bddc05607b81d236b3f720bfca2d1828d6ea3c0b";
			$secret = "72ef796a733881b64d5fd61ee562483f7364021b";
			$dadata = new \Dadata\DadataClient($token, $secret);
			$result = $dadata->clean("passport", $pass);
			if($result['qc'] == '0'){
				return '1';
			}else{
			    return '2';
            }
		}else{
			return $this->goHome();
		}
	}

	public function actionInndata(){
		if(Yii::$app->request->isAjax){
			$data = Yii::$app->request->post();
			$token = "bddc05607b81d236b3f720bfca2d1828d6ea3c0b";
			$dadata = new \Dadata\DadataClient($token, null);
			$result = $dadata->findById("party", $data['val'], 1);
			print_r($result['0']['value']);
		}
	}

	public function actionPhoneSms()
    {
	    if(YII::$app->request->isAjax){
	        $data = Yii::$app->request->post();
	        $numPass = rand(0, 999).rand(0, 999);
            $session = Yii::$app->session;
            $session->set('smsCode', $numPass);
            return $numPass;
        }
    }


    public function actionGetSms()
    {
	    if(Yii::$app->request->isAjax){
	        $data = Yii::$app->request->post();
            $val = trim(preg_replace('/[^0-9]/', '', $data['val']));
            $session = Yii::$app->session;
            $smsCode = $session->get('smsCode');
            if($smsCode == $val){
                return '200';
            }
        }
    }
    public function actionFormInquiry()
    {
        if(!Yii::$app->user->isGuest){
            $id = Yii::$app->user->identity->id;
            $model = new UserParamsInquiry();
            $inquiry = UserParamsInquiry::find()->where(['user_id' => $id])->all();
            if(Yii::$app->request->post()){
                if($model->load(Yii::$app->request->post()) && $model->validate()){
                    if($model->save()){

                        Yii::$app->session->setFlash('success', "Заявка принята");
                        return $this->refresh();
                    }
                }
            }
            return $this->render('FormInquiry',[
                'id' => $id,
                'model' => $model,
                'inquiry' => $inquiry,
            ]);
        }

    }
    public function actionInqLoad()
    {
	    if(Yii::$app->request->isAjax){
	        $data = Yii::$app->request->post();
	        $model = UserParamsInquiry::findOne($data['id']);
	        if(!empty($model->text)){
                return $model->text;
            }
        }
    }
}
