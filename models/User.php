<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface 
{

    public static function tableName()
    {
        return 'user';
    }
    public $smsCode;
    public $rePass;

    public function behaviors()
    {
       return [
           'timestamp' => [
               'class' => 'yii\behaviors\TimestampBehavior',
               'attributes' => [
                   ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                   ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
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
            [['username',
            'password',
            'phone',
            'emai',
            'date',
            'name',
            'surname',
            'authKey',
            'accessToken',
            'patronymic',
        ], 'string', 'max' => 255],
        [['created_at', 'updated_at'], 'safe'],
        ['sex','in', 'range' => ['1', '2']],
        ['phone_true','in', 'range' => ['0', '1']],
//        [
//            'rePass', 'compare', 'compareAttribute' => 'password',
//            'message' => "Пароли не совпадают", 'skipOnEmpty' => false,
//            'when' => function ($model) {
//                return $model->password !== null && $model->password !== '';
//            },
//        ],
//        [
//            'smsCode', 'compare', 'compareAttribute' => 'succ_sms',
//            'message' => "Код подтверждения не совпадают"
//        ],
        ['emai', 'email','message' => 'Неверный формат'],
        [['name', 'emai', 'phone'],'required','message' => 'Поля должны быть заполнены'],
        [['emai', 'phone'], 'unique','message' => 'Такой пользователь уже зарегистрирован'],
    ];
}

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'phone' => 'Телефон',
            'emai' => 'Email',
            'date' => 'Дата',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'patronymic' => 'Отчество',
            'sex' => 'Ваш пол:',
            'created_at' => 'Дата регистрации',
            'updated_at' => 'Дата изменения',
            'password' => 'Пароль',
        ];
    }

    
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }



    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username'=>$username]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
