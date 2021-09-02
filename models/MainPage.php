<?php

namespace app\models;

use Yii;

class MainPage extends \yii\db\ActiveRecord
{
    public $image;
    public static function tableName()
    {
        return 'main_page';
    }


    public function rules()
    {
        return [
            [['id_page'], 'integer'],
            [['texrt'], 'string'],
            [['date', 'type'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_page' => 'Id Page',
            'texrt' => 'Texrt',
            'date' => 'Date',
        ];
    }


    public function upload(){
        if($this->validate()){
            $this->image->saveAs("img/{$this->image->baseName}.{$this->image->extension}");
            return true;
        }else{
            return false;
        }
    }
}
