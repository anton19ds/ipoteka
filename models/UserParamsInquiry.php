<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "user_params_inquiry".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $date
 * @property string $statys
 * @property string|null $text
 */
class UserParamsInquiry extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_params_inquiry';
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
            [['user_id'], 'integer'],
            [['statys', 'text'], 'string'],
            [['text'], 'required'],
            [['date'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'date' => 'Дата заявки',
            'statys' => 'Статус заявки',
            'text' => 'Текст заявки',
        ];
    }
}
