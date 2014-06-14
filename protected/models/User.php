<?php

namespace app\models;


use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\helpers\Security;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $full_name
 * @property integer $role
 * @property integer $has_ban
 */
class User extends ActiveRecord implements IdentityInterface
{
    public $password;

    public function beforeSave($value)
    {
        if (isset($this->password)) {
            echo "string";
            $this->password_hash = \yii\helpers\Security::generatePasswordHash($this->password);
        }
        return parent::beforeSave($value);
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = NULL)
    {
        return static::findOne(['id' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->id;
    }

    public function validateAuthKey($authKey)
    {
        return $this->id == $authKey;
    }


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    public function validatePassword($password)
    {
        return Security::validatePassword($password,$this->password_hash );
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role', 'has_ban'], 'integer'],
            [['username', 'password_hash', 'full_name'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['full_name'], 'unique'],
            [['role'],'default','value'=>'1','on'=>'registration']
        ];
    }
    public function safeAttributes()
    {
        return array_merge(
            parent::safeAttributes(),
            ['password']
        );
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Нікнейм',
            'password' => 'Пароль',
            'full_name' => 'Повне ім`я',
            'role' => 'Роль',
            'has_ban' => 'Бан',
        ];
    }
}
