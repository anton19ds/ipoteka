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


    class ApplicationController extends Controller
    {
        public function actionZayavka()
        {
            if(Yii::$app->request->isAjax) {
                $data = Yii::$app->request->post();

                foreach($data as $key => $value) {
                    if(empty($value)) {
                        $result = array();
                        $result['code'] = '400';
                        $arr = json_encode($result);
                        return $arr;
                    }
                }

                if(User::find()->where(['phone' => $data['phone']])->orWhere(['emai' => $data['email']])
                    ->orWhere(['username' => $data['email']])
                    ->exists()) {
                    $result = array();
                    $result['code'] = '403';
                    $arr = json_encode($result);
                    return $arr;
                } else {
                    $model = new User();
                    $model->username = $data['email'];
                    $model->password = 'Q!' . rand(0, 999) . 'dF' . rand(0, 999);
                    $model->phone = $data['phone'];
                    $model->emai = $data['email'];
                    $model->name = $data['name'];
                    $model->surname = $data['firstname'];
                    $model->date = $data['date'];
                    if(Yii::$app->user->isGuest) {
                        if($model->save()) {
                            $user = new LoginForm();
                            $user->username = $model->username;
                            $user->password = $model->password;
                            if($user->login()) {
                                $result = array();
                                $result['code'] = '200';
                                $arr = json_encode($result);
                                return $arr;
                            }
                        }
                    } else {
                        $id = Yii::$app->user->identity->id;
                        $user_log = User::find()->where(['id' => $id])->one();
                        if(!empty($user_log)) {
                            if($user_log->emai == $data['email'] || $user_log->username == $data['email'] || $user_log->phone == $data['phone']) {
                                $arr = array();
                                $arr['code'] = '201';
                                $arr = json_encode($arr);
                                return $arr;
                            } else {
                                if( Yii::$app->user->logout()) {
                                    if($model->save()) {
                                        $user = new LoginForm();
                                        $user->username = $model->username;
                                        $user->password = $model->password;
                                        if($user->login()) {
                                            $result = array();
                                            $result['code'] = '200';
                                            $arr = json_encode($result);
                                            return $arr;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
