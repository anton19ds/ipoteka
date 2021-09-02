<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "load_documet".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $name
 * @property string|null $src
 * @property string|null $date
 */
class LoadDocumet extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'load_documet';
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
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['name', 'src', 'date'], 'string', 'max' => 255],
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
            'user_id' => 'User ID',
            'name' => 'Name',
            'src' => 'Src',
            'date' => 'Date',
            'statys' => 'статус'
        ];
    }
}
