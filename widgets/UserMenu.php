<?php
namespace app\widgets;

use Yii;
use yii\bootstrap\Widget;

class UserMenu extends Widget
{

    public function run()
    {
        return $this->render('user_menu');
    }
}
