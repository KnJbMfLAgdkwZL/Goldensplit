<?php

namespace app\models;
use Yii;
class MarathonBaners extends \yii\db\ActiveRecord
{
	public static function tableName()
	{
		return 'marathon_baners';
	}
	public function rules()
	{
		return [
			[['head', 'body'], 'required'],
			[['head', 'body'], 'string']
		];
	}
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'head' => 'Head',
			'body' => 'Body',
		];
	}
	public static function GetAllMarathonBaners()
	{
		$marathonbaners = self::find()->orderBy(['id' => SORT_ASC])->all();
		if (!count($marathonbaners))
		{
			return null;
		}
		return $marathonbaners;
	}
}