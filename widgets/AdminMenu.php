<?php
namespace app\widgets;

use Yii;
use yii\bootstrap\Widget;

class AdminMenu extends Widget
{

    public function run()
    {
        return $this->render('admin_menu');
    }
}
