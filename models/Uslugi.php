<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "uslugi".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $text
 * @property string|null $image
 * @property string $statys
 */
class Uslugi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uslugi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['statys'], 'string'],
            [['name', 'image'], 'string', 'max' => 255],
            [['text'], 'string', 'max' => 5000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text' => 'Text',
            'image' => 'Image',
            'statys' => 'Statys',
        ];
    }
}
