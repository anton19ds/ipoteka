<?php

    namespace app\modules\admin\controllers;


    use Yii;
    use yii\web\Controller;
    use app\modules\admin\controllers\MainController;
    use app\models\LoginForm;
    use app\models\User;
    use app\models\UserInfo;
    use app\models\UserParam;
    use app\models\AbsolutApplication;
    use app\models\Region;
    class ApplicationController extends MainController
    {
        public  function actionIndex($id){

            //$data = `curl -k -X POST -d "auth[login]=info@bolsche.ru&auth[password]=gjgjUdffl5646#io$" "https://mortgage-api-st.balance-pl.ru/api/absolut/v3.0/user_token"`;
             //   var_dump($data);
            return $this->render('index',[
                'id' => $id
            ]);
        }

        public function actionBtobMf24($id)
        {
            $model = User::find()->where(['id' => $id])->one();
            $user_info = UserInfo::find()->where(['user_id' => $id])->one();
            $user_param = UserParam::find()->where(['user_id' =>$id])->one();
            
            if(Yii::$app->request->post()){
                $result = Yii::$app->request->post();
                if($result['address_equal'] == "1"){

                }
                $dateT = new \DateTime($result["birth_date"]);
                $set = $dateT->format('d.m.Y');
                $dateTs = new \DateTime($result["date_delivery"]);
                $setR = $dateTs->format('d.m.Y');

                $sendJson = array(
                    "token" => "C448BD377B26BA625E69B9DA8794D",
                    "type" => "hypo_request",
                    "date" => date('Y-m-d H:s:i'),
                    "section_data" => array(
                        "loan_application" => array(
                            "kredit_type"=> "COMPLEX_HYPO",
                            "requested_amount"=> $result["requested_amount"],
                            "requested_crnc"=> "rub",
                            "credit_term"=> $result["credit_term"],
                            "loan_type"=> "ИПОТЕКА",
                            "client_lastname"=> $result["client_lastname"],
                            "client_firstname"=> $result["client_firstname"],
                            "client_middlename"=> $result["client_middlename"],
                            "citizenship"=> "1",
                            "sex"=> $result["sex"],
                            "birth_date"=> $set,
                            "credit_term_unit"=> "m",
                            "primary_income"=> $result["primary_income"],
                            "primary_crnc"=>"rub",
                            "address_equal"=>$result["address_equal"],
                            "client_addresses" => array(
                                "client_address" => array(
                                    // array(
                                    //         "address_type"=> "1",
                                    //         "code_cladr"=> "43036007000000",
                                    //         "region"=> "Кировская",
                                    //         "district"=> "Уржумский",
                                    //         "town"=> "Лазаревское",
                                    //         "house"=> "40",
                                    //         "flat"=> "1",
                                    //         "postcode"=> "876543",
                                    //         "region_code"=> "4300000000000",
                                    //         "region_type"=> "обл",
                                    //         "district_code"=> "4303600000000",
                                    //         "district_type"=> "р-н",
                                    //         "town_code"=> "4303600700000",
                                    //         "town_type"=> "с/п"
                                    // ),
                                    // array(
                                    //         "address_type"=> "2",
                                    //         "code_cladr"=> "43036001000001300",
                                    //         "region"=> "Кировская",
                                    //         "district"=> "Уржумский",
                                    //         "town"=> "Уржум",
                                    //         "street"=> "Елкина",
                                    //         "house"=> "42",
                                    //         "flat"=> "1",
                                    //         "postcode"=> "45764567567567",
                                    //         "region_code"=> "4300000000000",
                                    //         "region_type"=> "обл",
                                    //         "district_code"=> "4303600000000",
                                    //         "district_type"=> "р-н",
                                    //         "town_code"=> "4303600100000",
                                    //         "town_type"=> "г",
                                    //         "street_code"=> "43036001000001300",
                                    //         "street_type"=> "ул",
                                    // ),
                                ),
                            ),
                            "comms"=> array(),
                            "docs_subject"=> array(
                                "doc_subject" => array(
                                    "number"=> $result['number'],
                                    "series"=> $result['series'],
                                    "who_issues"=> $result['who_issues'],
                                    "date_delivery"=> $setR,
                                    "division_code"=> $result['division_code'],
                                    "doc_type_id"=> $result['doc_type_id']
                                ),
                            ), 
                        ),
                    ),
                );
                
                
                
                
                
                
                if(!empty($result['Phone'])){
                    $arrPhone = array(
                        "comm_type_id"=> $result['Phone']['comm_type_id'],
                        "comm_string"=> $result['Phone']['comm_string'],
                    );
                }
                if(!empty($result['Email'])){
                    $arrEmail = array(
                        "comm_type_id"=> $result['Email']['comm_type_id'],
                        "comm_string"=> $result['Email']['comm_string'],
                    );
                }
                if(!empty($result['Address'])){
                    $arrAdress = array();
                    foreach($result['Address'] as $key => $value){
                        if(!empty($value)){
                            $arrAdress[$key] = $value;
                        }
                    }
                }
                if(!empty($result['Address2'])){
                    $arrAdress2 = array();
                    foreach($result['Address2'] as $key => $value){
                        if(!empty($value)){
                            $arrAdress2[$key] = $value;
                        }
                    }
                }
                if(!empty($arrAdress)){
                    $sendJson["section_data"]["loan_application"]["client_addresses"]["client_address"] = array($arrAdress);
                }
                if(!empty($arrAdress2) && !empty($arrAdress)){
                    $sendJson["section_data"]["loan_application"]["client_addresses"]["client_address"] = array($arrAdress, $arrAdress2);
                }
                $comm = array($arrPhone, $arrEmail);
                $sendJson["section_data"]["loan_application"]["comms"]["comm"] = $comm;
                $sendJson = json_encode($sendJson, JSON_UNESCAPED_UNICODE);
                $comm = json_encode($comm, JSON_UNESCAPED_UNICODE);
                    echo "<pre>";
                    print_r($sendJson);
                    //print_r($result);
                    //print_r($comm);
                    //print_r($arrAdress);
                    echo "</pre>";
            }
            $pass_ser = null;
            if(!empty($user_param->numer)){
                $pass_ser = explode("-", $user_param->numer);
            }
            
            
            if( !empty($user_param->fact_region) ||
                !empty($user_param->fact_city) ||
                !empty($user_param->fact_street) ||
                !empty($user_param->fact_house) ||
                !empty($user_param->fact_appartament) ||
                !empty($user_param->fact_bilding)){
                $ziipets = '1';
            }else{
                $ziipets = '0';
            }
            return $this->render('mf24',[
                'model' => $model,
                'user_info' => $user_info,
                'user_param' => $user_param,
                'pass_ser' => $pass_ser,
                'ziipets' => $ziipets
            ]);
        }
        public function actionBalans($id){
            $user = User::find()->where(['id' => $id])->one();
            $userParam = UserParam::find()->where(['user_id' => $id])->one();
            $userInfo = UserInfo::find()->where(['user_id' => $id])->one();
            $zakPassport = explode("-", $userParam->numer);
            if(Yii::$app->request->post()){
                $data = Yii::$app->request->post();
                
                // {"result":
                //     {
                //         "token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHAiOjE2MzA2MzA3MTksInN1YiI6eyJpZCI6NjczLCJyb2xlIjoibWFuYWdlciIsIm5hbWUiOiLQlNC10LzRh9C10L3QutC-INCc0LjRhdCw0LjQuyIsImxvZ2luIjoiaW5mb0Bib2xzY2hlLnJ1IiwiZW1haWwiOiJpbmZvQGJvbHNjaGUucnUiLCJwYXJ0bmVyX2lkIjozNSwiYmFua19zdHJ1Y3R1cmVfaWQiOm51bGx9fQ.T5oUmFTinHCpUfIh79y5031xEqwcOuGgsVEFJajWG-0",
                //         "user":
                //         {
                //             "id":,
                //             "role":"manager",
                //             "name":"",
                //             "login":"info@bolsche.ru",
                //             "email":""
                //         }
                //     }
                $resylt = array(
                    "partner_id"=>673,
                    "partner_manager_info" => array(
                            "outer_partner_id" => $id,
                            "outer_partner_name" => "​Демченко Михаил",
                            "email" =>"info@bolsche.ru"
                    ),
                    "calculation" => array(),
                    'people' => array(
                        "general_information" => array(),
                        "current_passport" => array(),
                        "additional_information" => array(),
                        "main_job"=> array(),
                    ),
                );

                if(!empty($data['calculation'])){
                    $calculation = array();
                    foreach($data['calculation'] as $key => $value){
                        if(!empty($value)){
                            $calculation[$key] = $value;
                        }
                    }
                    $resylt["calculation"] = $calculation;
                }

                if(!empty($data['general_information'])){
                    $general = array();
                    foreach($data['general_information'] as $key => $value){
                        if(!empty($value)){
                            if($key == 'mobile_phones'){
                                $general[$key] = array($value);    
                            }else{
                                $general[$key] = $value;
                            }
                        }
                    }
                    $resylt["people"]["general_information"] = $general;
                }

                if(!empty($data['current_passport'])){
                    $general = array();
                    foreach($data['current_passport'] as $key => $value){
                        if(!empty($value)){
                                $general[$key] = $value;
                        }
                    }
                    $resylt["people"]["current_passport"] = $general;
                }

                if(!empty($data['additional_information'])){
                    $general = array();
                    foreach($data['additional_information'] as $key => $value){
                        if(!empty($value)){
                                $general[$key] = $value;
                        }
                    }
                    $resylt["people"]["additional_information"] = $general;
                }

                if(!empty($data['main_job'])){
                    $general = array();
                    foreach($data['main_job'] as $key => $value){
                        if(!empty($value)){
                            if($key == 'phones'){
                                $general[$key] = array($value);
                            }else{
                                $general[$key] = $value;
                            }
                        }
                    }
                    $resylt["people"]["main_job"] = $general;
                }

                $resylt = json_encode($resylt, JSON_UNESCAPED_UNICODE);
                    
                if(!AbsolutApplication::find()->where(['id' => $id])->exists()){
                    $model = new AbsolutApplication();
                    $model->user_id = $id;                    
                    $model->ammount = $data['calculation']['credit_amount'];                    
                    $model->credit_term	= $data['calculation']['credit_term'];
                    $model->request = $resylt;
                    if($model->save()){
                        return $this->refresh();
                    }
                }
            }
            if(!AbsolutApplication::find()->where(['id' => $id])->exists()){
                $massiv = AbsolutApplication::find()->where(['user_id' => $id])->one();
                $massivArr = json_decode($massiv->request, true);
                $trest = array(
                    'proof_of_income' => 'Потверждение дохода',
                    'insurance_scheme' =>'Вид страховки',
                    'credit_type' => 'Тип кредита',
                    'apartment_type' => 'Тип объекта',
                    'customer_type' => 'Тип клиента',
                    'credit_term' => 'Срок кредита',
                    'initial_fee' => 'Сумма первоначальног о взноса',
                    'apartment_price' => 'Стоимость объекта',
                    'credit_amount' => 'Сумма кредита',
                    'has_maternal_capital' => 'Есть материнский капитал',
                    'comment' => 'Комментарий к заявке'
                );
                return $this->render('balans_form',[
                    'massivArr' => $massivArr,
                    'user' => $user,
                    'userInfo' => $userInfo,
                    'userParam' => $userParam,
                    'zakPassport' => $zakPassport,
                    'trest' => $trest
                 ]);
            }else{
                return $this->render('balans',[
                    'user' => $user,
                    'userInfo' => $userInfo,
                    'userParam' => $userParam,
                    'zakPassport' => $zakPassport
                 ]);
            }
        }

        public function actionFsspRequest($id)
        {
            
            $model = User::find()->where(['id' => $id])->one();
            $userParam = UserParam::find()->where(['user_id' => $id])->one();
            $regions = Region::find()->all();
            $arr = null;
            $task = null;
            $arrts = null;
            if(Yii::$app->request->post()){
                $data = Yii::$app->request->post();
                if(!empty($data['task'])){
                    $arrts = $this->ZaprosFssp($data['task']);
                }else{
                    $data = "https://api-ip.fssp.gov.ru/api/v1.0/search/physical?region=".$data['region'].
                    "&firstname=".urlencode($data['firstname']).
                    "&secondname=".urlencode($data['secondname']).
                    "&lastname=".urlencode($data['lastname']).
                    "&birthdate=".urlencode($data['birthdate']).
                    "&token=7oqxGSrNWCww";
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                        CURLOPT_URL => $data,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => false,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'GET',
                    ));
                    $request = curl_exec($curl);
                    curl_close($curl);
                    $arr = json_decode($request, true);
                    
                    if(isset($arr['response']['task']) && !empty($arr['response']['task'])){
                        $task = $arr['response']['task'];
                    }
                }
            }
            // curl -X GET "" -H "accept: application/json"
            return $this->render('index-fssp',[
                'arr' => $arr,
                'regions' => $regions,
                'userParam' => $userParam,
                'model' => $model,
                'task' =>$task,
                'arrts' => $arrts
            ]);
        }
        
        public function ZaprosFssp($task)
        {
                if(!empty($task)){
                    $curl = curl_init();
                        $data = "https://api-ip.fssp.gov.ru/api/v1.0/result?token=7oqxGSrNWCww&task=".urlencode($task);
                        curl_setopt_array($curl, array(
                    CURLOPT_URL => $data,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => false,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                ));
                    $response = curl_exec($curl);
                    curl_close($curl);
                    $arr = json_decode($response, true);
                    return $arr;
                     
                }
        } 

    }
    