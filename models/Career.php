<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "career".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $duties
 * @property string|null $demand
 * @property string|null $dop
 * @property string|null $city
 * @property string|null $date
 * @property string $statys
 */
class Career extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'career';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['statys'], 'string'],
            [['name', 'duties', 'demand', 'dop', 'city', 'date'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование Должности',
            'duties' => 'Обязанности',
            'demand' => 'Требования',
            'dop' => 'Дополнительно',
            'city' => 'Город',
            'date' => 'Дата',
            'statys' => 'Статус',
        ];
    }
}
