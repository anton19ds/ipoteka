<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property string|null $KOD_region
 * @property string|null $NAME_region
 * @property int $id
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KOD_region', 'NAME_region'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'KOD_region' => 'Kod Region',
            'NAME_region' => 'Name Region',
            'id' => 'ID',
        ];
    }
}
