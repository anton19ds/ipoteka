<?php
namespace app\widgets;

use Yii;
use yii\bootstrap\Widget;

class GeneralBlock extends Widget
{

    public function run()
    {
        return $this->render('block_footer');
    }
}
