<?php
namespace app\widgets;

use Yii;
use yii\bootstrap\Widget;
use app\models\Articles;

class NewsBlock extends Widget
{

    public function run()
    {
    	$models = Articles::find()->limit(4)->all();
        return $this->render('block_news',[
        	'models' => $models
        ]);
    }
}
