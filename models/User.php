<?php
namespace app\models;
use yii\db\ActiveRecord;
class User extends ActiveRecord implements \yii\web\IdentityInterface
{
	public $authKey;
	public static function tableName()
	{
		return 'user';
	}
	public function rules()
	{
		return [
			[['username', 'password', 'role'], 'required'],
			[['username'], 'unique'],
			[['username', 'password', 'role'], 'string', 'max' => 255]
		];
	}
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'username' => 'Логин',
			'password' => 'Пароль',
			'role' => 'Роль',
		];
	}
	public static function findIdentity($id)
	{
		$user = self::find()->where(["id" => $id])->one();
		if (!count($user))
		{
			return null;
		}
		return new static($user);
	}
	public static function findIdentityByAccessToken($token, $userType = null)
	{
		$user = self::find()->where(["accessToken" => $token])->one();
		if (!count($user))
		{
			return null;
		}
		return new static($user);
	}
	public static function findByUsername($username)
	{
		$user = self::find()->where(["username" => $username])->one();
		if (!count($user))
		{
			return null;
		}
		return new static($user);
	}
	public static function findById($id)
	{
		$user = self::find()->where(["id" => $id])->one();
		if (!count($user))
		{
			return null;
		}
		return new static($user);
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