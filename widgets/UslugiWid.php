<?php
namespace app\widgets;

use Yii;
use yii\bootstrap\Widget;
use app\models\Uslugi;

class UslugiWid extends Widget
{
	public $type;
    public function run()
    {
    	$uslugi = Uslugi::find()->asArray()->all();
        return $this->render('uslugi',[
        	'type'=> $this->type,
        	'uslugi' => $uslugi,
        ]);
    }
}
