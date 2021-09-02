<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "question".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $text
 * @property string|null $date
 */
class Question extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['title', 'date'], 'string', 'max' => 255],
        ];
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

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'text' => 'Текст',
            'date' => 'Date',
        ];
    }
}
