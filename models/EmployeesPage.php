<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "employees_page".
 *
 * @property int $id
 * @property string|null $position
 * @property string|null $name
 * @property string|null $description
 * @property string|null $image
 * @property string|null $date
 */
class EmployeesPage extends ActiveRecord
{
    public $imageFile;

    public static function tableName()
    {
        return 'employees_page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['position', 'name', 'image', 'date'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, pdf'],
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
            'position' => 'Должность',
            'name' => 'Имя',
            'description' => 'Описание',
            'image' => 'Изображение',
            'date' => 'Дата',
            'imageFile' => 'Фото сотрудника'
        ];
    }
    public function upload(){
        {
            if ($this->validate()) {
                if(!empty($this->imageFile)){
                    $url = 'img_user_' . rand(0,999).'_'.rand(0,999).'.' . $this->imageFile->extension;
                    $this->imageFile->saveAs('@app/web/img/'.$url);
                    return $url;
                }
            } else {
                return false;
            }
        }
    }
}
