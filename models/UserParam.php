<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_param".
 *
 * @property int $id
 * @property string|null $seria серия паспорта
 * @property string|null $numer номер паспорта
 * @property string|null $cod код подразделения
 * @property string|null $issue кем выдан
 * @property string|null $data_issue дата выдачи
 * @property string|null $year_birth день рождения
 * @property string|null $place_birth место рождения
 * @property string|null $region область
 * @property string|null $city город
 * @property string|null $street улица
 * @property string|null $house дом
 * @property string|null $appartament квартира
 * @property string|null $corpus корпус
 * @property string|null $bilding строение
 * @property string|null $post_code индекс
 * @property string|null $fact_region фак. область
 * @property string|null $fact_city фак. город
 * @property string|null $fact_street фак. улица
 * @property string|null $fact_house фак. дом
 * @property string|null $fact_appartament фак. квартира
 * @property string|null $fact_corpus фак. корпус
 * @property string|null $fact_bilding фак. строение
 * @property string|null $fact_post_code фак. индекс
 */
class UserParam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $day_b;
    public $mon_b;
    public $yer_b;
    public $day_v;
    public $mon_v;
    public $yer_v;

    public static function tableName()
    {
        return 'user_param';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'numer', 'cod', 'issue', 'data_issue', 'year_birth', 'place_birth', 'region', 'city', 'street', 'house', 'appartament', 'corpus', 'bilding', 'post_code', 'fact_region', 'fact_city', 'fact_street', 'fact_house', 'fact_appartament', 'fact_corpus', 'fact_bilding', 'fact_post_code'], 'string', 'max' => 255],
            [['numer'],  'unique', 'message' => 'Паспорт с такими данными уже зарегистрирован'],
            ['zag_pasport', 'in', 'range' => ['0','1']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'numer' => 'Серия и Номер',
            'cod' => 'Код подразделения',
            'issue' => 'Адрес выдачи',
            'data_issue' => 'Дата выдачи',
            'year_birth' => 'День рождения',
            'place_birth' => 'Место рождения',
            'region' => 'Область',
            'city' => 'Город',
            'street' => 'Улица',
            'house' => 'Дом',
            'appartament' => 'Квартира',
            'corpus' => 'Корпус',
            'bilding' => 'Строение',
            'post_code' => 'Индекс',
            'fact_region' => 'Fact Region',
            'fact_city' => 'Fact City',
            'fact_street' => 'Fact Street',
            'fact_house' => 'Fact House',
            'fact_appartament' => 'Fact Appartament',
            'fact_corpus' => 'Fact Corpus',
            'fact_bilding' => 'Fact Bilding',
            'fact_post_code' => 'Fact Post Code',
        ];
    }
}
