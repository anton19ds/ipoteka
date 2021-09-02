<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class AbsolutApplication extends ActiveRecord
{
    public static function tableName()
    {
        return 'absolut_application';
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
            [['request'], 'string'],
            [['user_id', 'api_id', 'short_uuid', 'date', 'ammount', 'credit_term'], 'string', 'max' => 255],
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
            'api_id' => 'Api ID',
            'short_uuid' => 'Short Uuid',
            'date' => 'Date',
            'ammount' => 'Ammount',
            'credit_term' => 'Credit Term',
            'request' => 'Request',
        ];
    }
}
