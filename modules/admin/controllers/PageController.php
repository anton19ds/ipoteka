<?php

    namespace app\modules\admin\controllers;


    use app\modules\admin\controllers\MainController;
    use Yii;
    use yii\data\ActiveDataProvider;
    use yii\web\Controller;
    use app\models\LoginForm;
    use app\models\User;
    use app\models\MainPage;
    use yii\web\UploadedFile;
    use app\models\EmployeesPage;
    use app\models\PageGalery;
    use app\models\Reviews;
    use app\models\Question;

    /**
     * Default controller for the `admin` module
     */
    class PageController extends MainController
    {
        public function actionIndex(){
            $models = MainPage::find()->where(['id' => '1'])->one();
            $modelsImg = MainPage::find()->where(['id' => '2'])->one();
            if(Yii::$app->request->post()){
                $data = Yii::$app->request->post();
                $modelsImg->image =  UploadedFile::getInstance($modelsImg, 'image');
                if($modelsImg->image && $modelsImg->upload()){
                    $modelsImg->texrt = "/img/".$modelsImg->image->baseName . '.' . $modelsImg->image->extension;
                    $modelsImg->image = null;
                    if(!$modelsImg->save()){
                        var_dump($modelsImg->getErrors());
                    }
                }
                if(!empty($data['MainPage']['texrt'])){
                    $models->texrt = $data['redactor'];
                    $models->update();
                    }

                return $this->refresh();
            }
            return $this->render('index', [
                'models' => $models,
                'modelsImg' => $modelsImg
            ]);

        }

        public function actionAboutUs()
        {
            $models = EmployeesPage::find()->all();
            $dataProvider = new ActiveDataProvider([
                'query' => EmployeesPage::find(),
            ]);
            return $this->render('about-us',[
                'models' => $models,
                'dataProvider' => $dataProvider,

            ]);
        }


        public function actionUserView($id){
            $model = EmployeesPage::find()->where(['id' => $id])->one();
            if(Yii::$app->request->post()){
                $data = Yii::$app->request->post();
                $model->imageFile =  UploadedFile::getInstance($model, 'imageFile');
                $imgUrl = $model->upload();
                if($model->imageFile && $imgUrl){
                    if($model->load($data)){
                        $model->image = "/img/".$imgUrl;
                        $model->imageFile = null;
                        if($model->save()){
                            Yii::$app->session->setFlash('success', "Сотрудник сохранен");
                            return $this->refresh();
                        }else{
                            var_dump($model->getErrors());
                        }
                        }
                    }
                }
            return $this->render('form', [
                'model' => $model,
            ]);
        }


        public function actionUserAdd(){
            $model = new EmployeesPage();
            if(Yii::$app->request->post()){
                $data = Yii::$app->request->post();
                $model->imageFile =  UploadedFile::getInstance($model, 'imageFile');
                $imgUrl = $model->upload();
                if($model->imageFile && $imgUrl){
                    if($model->load($data)){
                        $model->image = "/img/".$imgUrl;
                        $model->imageFile = null;
                        if($model->save()){
                            Yii::$app->session->setFlash('success', "Сотрудник сохранен");
                            return $this->refresh();
                        }else{
                            var_dump($model->getErrors());
                        }
                    }
                }
            }
            return $this->render('form', [
                'model' => $model,
            ]);
        }


        public function actionDeleteUser($id)
        {
            $model = EmployeesPage::find()->where(['id' => $id])->one();
            if($model->delete()){
                return $this->redirect('/admin/page/about-us');
            }

        }

        public function actionPageGalery()
    {
        $models = PageGalery::find()->all();
        $dataProvider = new ActiveDataProvider([
            'query' => PageGalery::find(),
        ]);
            return $this->render('PageGalery',[
                'models' => $models,
                'dataProvider' => $dataProvider,
            ]);
    }

        public function actionGeleryAdd()
        {
            $model = new PageGalery();
            if(Yii::$app->request->post()){
                $data = Yii::$app->request->post();
                $model->imageFile =  UploadedFile::getInstance($model, 'imageFile');
                $imgUrl = $model->upload();
                if($model->imageFile && $imgUrl){
                    if($model->load($data)){
                        $model->image = "/img/".$imgUrl;
                        $model->imageFile = null;
                        if($model->save()){
                            Yii::$app->session->setFlash('success', "Изображение сохранено");
                            return $this->refresh();
                        }else{
                            var_dump($model->getErrors());
                        }
                    }
                }
            }

            return $this->render('gelery-add',[
                'model' => $model,
            ]);
        }


        public function actionReviews(){
            $dataProvider = new ActiveDataProvider([
                'query' => Reviews::find(),
            ]);
            
            return $this->render('reviews',[
                'dataProvider' => $dataProvider
            ]);
        }

        public function actionRiwersAdd()
        {
            $model = new Reviews();
            if(Yii::$app->request->post()){
                if($model->load(Yii::$app->request->post()) && $model->validate()){
                    if($model->save()){
                        Yii::$app->session->setFlash('success', "Отзыв сохранен");
                        return $this->redirect('/admin/page/reviews');
                    }
                }
                }
            return $this->render('add-rivwers',[
                'model' => $model
            ]);
        }

        public function actionRedactorRiw($id)
        {
            $model = Reviews::find()->where(['id' => $id])->one();
            if(Yii::$app->request->post()){
                if($model->load(Yii::$app->request->post()) && $model->validate()){
                    if($model->save()){
                        Yii::$app->session->setFlash('success', "Отзыв сохранен");
                        return $this->refresh();
                    }
                }
            }
            return $this->render('add-rivwers',[
                'model' => $model
            ]);

        }

        public function actionDeleteRiw($id)
        {
            $model = Reviews::find()->where(['id' => $id])->one();
            if($model->delete()){
                return $this->redirect('/admin/page/reviews');
            }
        }

//
//        public function actionUpload(){
//            $model = new UploadImage();
//            if(Yii::$app->request->isPost){
//                $model->image =
//                $model->upload();
//                return;
//            }
//            return $this->render('upload', ['model' => $model]);
//        }
    }
