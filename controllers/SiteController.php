<?php

namespace app\controllers;

use app\models\EmployeesPage;
use app\models\PageGalery;
use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\LoginForm;
use app\models\Articles;
use app\models\ContactForm;
use app\models\DocumentPage;
use app\controllers\MainController;
use app\models\MainPage;
use app\models\Question;

class SiteController extends MainController
{


    public function actionIndex()
    {


        

    //    $arr = array(
    //        "token" => "C448BD377B26BA625E69B9DA8794D",
    //        "type"=> "hypo_request",
    //        "date"=> date('Y-m-d H:s:i'),
    //    );
    //    $data = json_encode($arr);

    //    $var = 'curl -v -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d "'.$data.'"  http://b2b.nmf24.ru/BankiruAPITest/newApp';
    //    var_dump($var);

//         {
// "token": " kKTT5OnXU1njj46Y13X3DxqJ5qqX56f ",
// "type": "hypo_request",
// "date": "2018-03-22 15:39:03",
//     "section_data": {
//         "loan_application": {
//             "kredit_type": "COMPLEX_HYPO",
//             "requested_amount": "2500000",
//             "requested_crnc": "rub",
//             "credit_term": "120",
//             "loan_type": "ИПОТЕКА",
//             "client_lastname": "Аракелян",
//             "client_firstname": "Гарник",
//             "client_middlename": "Владимирович",
//             "citizenship": "1",
//             "sex": "1",
//             "birth_date": "18.10.1982",
//             "credit_term_unit": "m",
//             "primary_income": "63000",
//             "primary_crnc": "rub",
//                      "address_equal": "0",
//             "client_addresses": {
//                 "client_address": [
//                     {
//                         "address_type": "1",
//                         "code_cladr": "43036007000000",
//                         "region": "Кировская",
//                         "district": "Уржумский",
//                         "town": "Лазаревское",
//                         "house": "40",
//                         "flat": "1",
//                         "postcode": "613554",
//                         "region_code": "4300000000000",
//                         "region_type": "обл",
//                         "district_code": "4303600000000",
//                         "district_type": "р-н",
//                         "town_code": "4303600700000",
//                         "town_type": "с/п"
//                     },
//                     {
//                         "address_type": "2",
//                         "code_cladr": "43036001000001300",
//                         "region": "Кировская",
//                         "district": "Уржумский",
//                         "town": "Уржум",
//                         "street": "Елкина",
//                         "house": "42",
//                         "flat": "1",
//                         "postcode": "613530",
//                         "region_code": "4300000000000",
//                         "region_type": "обл",
//                         "district_code": "4303600000000",
//                         "district_type": "р-н",
//                         "town_code": "4303600100000",
//                         "town_type": "г",
//                         "street_code": "43036001000001300",
//                         "street_type": "ул",
//                         "address_type": "9"
//                     }
//                     {
//                         "address_type": "4",
//                         "region": "Кировская",
//                         "region_code": "4300000000000",
//                         "region_type": "обл",
//                         "town": "Киров",
//                         "town_code": "4300000100000",
//                         "town_type": "г",
//                     }
                    
//                 ]
//             },
//             "comms": {
//                 "comm": [
//                     {
//                         "comm_type_id": "6",
//                         "comm_string": "+79127337306",
//                         "comm_note": "2"
//                     },
//                     {
//                         "comm_type_id": "2",
//                         "comm_string": "+9037728578"
//                     },
//                     {
//                         "comm_type_id": "3",
//                         "comm_string": "test@test.ru"
//                     }
//                 ]
//             },
//             "docs_subject": {
//                 "doc_subject": {
//                     "number": "897367",
//                     "series": "3308",
//                     "who_issues": "УФМС по Уржумскому району",
//                     "date_delivery": "19.06.2009",
//                     "division_code": "430-035",
//                     "doc_type_id": "21"
//                 }
//             }
//         }
//     }
// }
//
//        $input_xml = '<s>
//                        <s n=”EnquiryRequest”>
//                              <a n=”reason”>02</a>
//                              <a n=”financeType”>23</a>
//                            <a n=”currency”>EUR</a>
//                            <a n=”creditLimit”>2000</a>
//                            <a n=”paymentFrequency”>03</a>
//                            <a n=”applicationChannel”>01</a>
//                            <a n=”cbrFinanceType”>03</a>
//                            <c n=”Consumer”>
//                                <s>
//                                    <a n=”applicantType”>01</a>
//                                    <a n=”name1”>John</a>
//                                    <a n=”surname”>Smith</a>
//<a n=”sex”>1</a>
//<a n=”dateOfBirth” >19650520</a>
//<a n=”nationality”>GB</a>
//<a n=”primaryIDType”>01</a>
//<a n=”primaryID”>4</a>
//<a n=”secondaryIDType”>98</a>
//<a n=”primaryIncome”>1400</a>
//<a n=”primaryIncomeFreq”>3</a>
//<c n=”Address”>
//<s>
//<a n=”addressFlag”>0</a>
//<a n=”addressType”>1</a>
//</s>
//<s>
//<a n=”addressFlag”>1</a>
//<a n=”addressType”>1</a>
//</s>
//</c>
//</s>
//</c>
//</s>
//</s>';
//        $url = "https://ch-test.bki-okb.com/cpuEnquiry.asp";
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, $url);
//        //curl_setopt($ch, CURLOPT_POSTFIELDS,"xmlRequest=" . $input_xml);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
//        $data = curl_exec($ch);
//        curl_close($ch);
//        var_dump($data);

        $mainTitle = MainPage::find()->where(['id' => '1'])->asArray()->one();
        $mainImage = MainPage::find()->where(['id' => '2'])->asArray()->one();
        $this->view->registerJsFile("/js/calc.js", ['depends' => 'yii\web\JqueryAsset']);
        return $this->render('index',[
            'mainTitle' => $mainTitle,
            'mainImage' => $mainImage
        ]);
    }


    public function actionReadGrafik(){
        if(Yii::$app->request->isAjax){
            $data = Yii::$app->request->post();
            $time = $data['times'];
            $summ = preg_replace('/[^0-9]/', '', $data['summ']);
            $stafka = preg_replace('/[^0-9]/', '', $data['stafka']);
            $colMount = $time*12;
            $oneMesS = $stafka / 100 / 12;
            $parametr1 = $oneMesS*pow(1+ $oneMesS, $colMount);
            $parametr2 = pow(1+$oneMesS, $colMount) - 1;
            $reznes = $parametr1 / $parametr2;
            $plat = $summ * $reznes;
            $string = "<ul>";
            $string .= "<li><span>#</span><span>Оставшиеся количество месяцев</span><span>Сумма платежа</span></li>";
            $samm = $plat*180;
            $aff= 0;
            $a = 1;
            for($i=180;  $i>=1; $i= $i-1){
                if($i%12 == 0){
                    $string .= "<li><hr></li>";
                    $a = 1;
                }
                $ster = $samm / $i;
                $ster2 = $samm * $oneMesS;
                $ress = round($ster) + round($ster2);
                $samm = $samm - $ress;
                $string .= "<li><span>".$a."</span><span> ".$i."</span> <span>".number_format($ress, 0, ',', ' ')."</span></li>";
                $aff = $aff + $ress;
                $a = $a + 1;
            }
            $string .= "</ul>";
            return $string;
        }
    }
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }


    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionCompany(){
        $gallery = PageGalery::find()->asArray()->all();
        $empoloes = EmployeesPage::find()->asArray()->all();
        return $this->render('company',[
            'empoloes' => $empoloes,
            'gallery' => $gallery
        ]);
    }



    public function actionKeis(){
        return $this->render('keis');
    }

    public function actionUslugi(){
        return $this->render('uslugi');
    }

    public function actionPartner(){
        return $this->render('partner');
    }
    public function actionNews(){
        $models = Articles::find()->all();
        return $this->render('news', [
            'models' => $models
        ]);
    }

    public function actionNew($alias){
        if(Articles::find()->where(['alias' => $alias])->exists()){
            $models = Articles::find()->where(['alias' => $alias])->one();
        }else{
            $models = Articles::find()->where(['id' => $alias])->one();
        }
        return $this->render('new', [
            'models' => $models
        ]);
    }



    public function actionDocument()
    {
        $models = DocumentPage::find()->all();
        return $this->render('document',[
            'models' => $models
        ]);
    }

    public function actionCareer()
    {
        return $this->render('career');
    }

    public function actionReviews()
    {
        return $this->render('reviews');
    }

    public function actionQuestion()
    {
        $models = Question::find()->all();
        return $this->render('question',[
            'models' => $models
        ]);
    }
}
