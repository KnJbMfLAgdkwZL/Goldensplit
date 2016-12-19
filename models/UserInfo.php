<?php
namespace app\models;
use Yii;
class UserInfo extends \yii\db\ActiveRecord
{
	public static function tableName()
	{
		return 'user_info';
	}
	public function rules()
	{
		return [
			[['user_id'], 'required'],
			[['user_id'], 'integer'],
			[['avatar', 'YouTube', 'Twitch', 'VK', 'Twitter'], 'string', 'max' => 255],
			[['About'], 'string']
		];
	}
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'user_id' => 'User ID',
			'avatar' => 'Avatar',
			'YouTube' => 'YouTube',
			'Twitch' => 'Twitch',
			'VK' => 'Vk',
			'Twitter' => 'Twitter',
			'About' => 'О вас',
		];
	}
	public static function GetUserInfo($id)
	{
		$result = self::find()->where(['user_id' => $id])->one();
		return $result;
	}
}