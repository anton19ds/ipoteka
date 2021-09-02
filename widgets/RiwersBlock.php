<?php
namespace app\widgets;

use app\models\Reviews;
use Yii;
use yii\bootstrap\Widget;


class RiwersBlock extends Widget
{

    public $page;

    public function run()
    {
        $models = Reviews::find()->limit(3)->all();
        return $this->render('riwers',[
            'models' => $models,
            'page' => $this->page,
        ]);
    }
}
