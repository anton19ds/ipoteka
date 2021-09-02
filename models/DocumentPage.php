<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "document_page".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $img
 * @property string|null $date
 */
class DocumentPage extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'document_page';
    }
    public function behaviors()
    {
     return [
         'timestamp' => [
             'class' => 'yii\behaviors\TimestampBehavior',
             'attributes' => [
                ActiveRecord::EVENT_BEFORE_INSERT => ['date'],
                 ActiveRecord::EVENT_BEFORE_UPDATE => ['date'],
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
            [['name', 'img', 'date'], 'string', 'max' => 255],
            [['date'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
            'img' => 'Документ',
            'date' => 'Дата добавления',
        ];
    }
}
