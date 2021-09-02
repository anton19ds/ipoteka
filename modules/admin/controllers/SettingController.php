<?php

    namespace app\modules\admin\controllers;
    
    use Yii;
    use yii\data\ActiveDataProvider;
    use yii\web\Controller;
    use yii\web\UploadedFile;
    use app\models\Setting;
    use app\modules\admin\controllers\MainController;

    class SettingController extends MainController
    {
        public function actionIndex()
        {
            
            $email = Setting::find()->where(['key_set'=> 'email'])->one();
            $phone = Setting::find()->where(['key_set' => 'phone'])->one();
            $address = Setting::find()->where(['key_set' => 'address'])->one();
            $map = Setting::find()->where(['key_set' => 'map'])->one();
            $footerData = Setting::find()->where(['key_set' => 'footer_data'])->one();

            if(Yii::$app->request->post()){
                $data = Yii::$app->request->post();
                if(!empty($data['email-inp'])){
                    $email->value = $data['email-inp'];
                    $email->save();
                }
                if(!empty($data['phone-inp'])){
                    $phone->value = $data['phone-inp'];
                    $phone->save();
                }
                if(!empty($data['address-inp'])){
                    $address->value = $data['address-inp'];
                    $address->save();
                }
                if(!empty($data['map-inp'])){
                    $map->value = $data['map-inp'];
                    $map->save();
                }
                
                if(!empty($data['redactor'])){
                    $footerData->value = $data['redactor'];
                    $footerData->save();
                }
                return $this->refresh();
            }
            return $this->render('index',[
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
                'map' => $map,
                'footerData' => $footerData
            ]);
        }
    }