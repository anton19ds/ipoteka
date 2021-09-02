<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class AdminUser extends ActiveRecord implements IdentityInterface 
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin_user';
    }
    public function behaviors()
    {
       return [
           'timestamp' => [
               'class' => 'yii\behaviors\TimestampBehavior',
               'attributes' => [
                   ActiveRecord::EVENT_BEFORE_INSERT => ['created_up', 'apdate_up'],
                   ActiveRecord::EVENT_BEFORE_UPDATE => ['apdate_up'],
               ],
           ],
       ];
   }



   public function rules()
   {
    return [
        [['username',
            'password',
            'authKey',
            'accessToken',
            'name', 'apdate_up', 'created_up'], 'string', 'max' => 255],
        [['created_at', 'updated_at'], 'safe'],
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
            'name' => 'Name',
            'apdate_up' => 'Apdate Up',
            'authKey' => 'authKey',
            'accessToken' => 'accessToken',
            'created_up' => 'Created Up',
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
