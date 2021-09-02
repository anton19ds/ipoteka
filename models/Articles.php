<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Articles extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

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
            [['text'], 'string'],
            [['name', 'img', 'date'], 'string', 'max' => 255],
            [['date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Контент',
            'name' => 'Наименование',
            'img' => 'Изображение',
            'date' => 'Дата',
            'statys' => 'Статус'
        ];
    }
}
