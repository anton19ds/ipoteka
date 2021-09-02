<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "document_zapros".
 *
 * @property int $id
 * @property string|null $date
 * @property int|null $user_send
 * @property int|null $user_id
 * @property string|null $text
 */
class DocumentZapros extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'document_zapros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_send', 'user_id'], 'integer'],
            [['text'], 'string'],
            [['date'], 'string', 'max' => 255],
            ['statys','in', 'range' => ['1', '2']],
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
            'date' => 'Date',
            'user_send' => 'User Send',
            'user_id' => 'User ID',
            'text' => 'Текст запроса',
        ];
    }
}
