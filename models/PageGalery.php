<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "page_galery".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $date
 * @property string|null $image
 */
class PageGalery extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'page_galery';
    }

    public $imageFile;

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['date'],
                ],
            ],
        ];
    }
    public function rules()
    {
        return [
            [['title', 'date', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'date' => 'Date',
            'image' => 'Изображение галлереи',
            'imageFile' => 'Изображение галлереи',
        ];
    }

    public function upload(){
        {
            if ($this->validate()) {
                if(!empty($this->imageFile)){
                    $url = 'img_gallery_' . rand(0,999).'_'.rand(0,999).'.' . $this->imageFile->extension;
                    $this->imageFile->saveAs('@app/web/img/'.$url);
                    return $url;
                }
            } else {
                return false;
            }
        }
    }
}
