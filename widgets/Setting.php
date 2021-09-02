<?php
namespace app\widgets;

use app\models\Setting as ModelsSetting;
use Yii;
use yii\bootstrap\Widget;

class Setting extends Widget
{
    public $let;
    public function run()
    {
        $model = ModelsSetting::find()->where(['key_set' => $this->let])->one();
        return $model->value;
    }
}
