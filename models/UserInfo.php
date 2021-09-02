<?php

namespace app\models;
 
use Yii;

/**
 * This is the model class for table "user_info".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $name_org
 * @property string|null $inn_org
 * @property string|null $phone_org
 * @property string|null $dol_org
 * @property string|null $staj_org
 * @property string|null $dohod
 * @property string|null $obrazov
 * @property string|null $familia_stat
 * @property string|null $col_ijdev
 */
class UserInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['name_org', 'inn_org', 'phone_org', 'dol_org', 'staj_org', 'dohod', 'obrazov', 'familia_stat', 'col_ijdev'], 'string', 'max' => 255],
            ['car_license','in', 'range' => ['0', '1']],
            ['rab_type','in', 'range' => ['0', '1','3']],

            
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
            'name_org' => 'Название организации',
            'inn_org' => 'ИНН организации',
            'phone_org' => 'Рабочий телефон',
            'dol_org' => 'Должность',
            'staj_org' => 'Рабочий стаж',
            'dohod' => 'Доход',
            'obrazov' => 'Образование',
            'familia_stat' => 'Семейное положение',
            'col_ijdev' => 'Количество иждевенцов',
            'car_license' => 'Водительское удостоверение',
            'rab_type' => 'rab_type'
        ];
    }
}
