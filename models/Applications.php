<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Applications".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $result
 * @property string $statys
 */
class Applications extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Applications';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'user_id'], 'integer'],
            [['statys'], 'string'],
            [['result'], 'string', 'max' => 255],
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
            'result' => 'Result',
            'statys' => 'Statys',
        ];
    }
}
