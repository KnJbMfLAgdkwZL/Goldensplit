<?php
namespace app\models;
use Yii;
class NewsComment extends \yii\db\ActiveRecord
{
	public static function tableName()
	{
		return 'news_comment';
	}
	public function rules()
	{
		return [
			[['news_id', 'user_id', 'message', 'date'], 'required'],
			[['news_id', 'user_id', 'date'], 'integer'],
			[['message'], 'string']
		];
	}
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'news_id' => 'News ID',
			'user_id' => 'User ID',
			'message' => 'Message',
			'date' => 'Date',
		];
	}
	public static function GetCommentsCount($newsid)
	{
		$comments = self::find()->where(['news_id' => $newsid])->all();
		return count($comments);
	}
	public static function GetComments($newsid)
	{
		$comments = self::find()->where(['news_id' => $newsid])->all();
		return $comments;
	}

	public static function GetComments_dataProvider($newsid)
	{
		$dataProvider = new \yii\data\ActiveDataProvider([
			'query' => \app\models\NewsComment::find()->where(['news_id' => $newsid]),
		]);
		return $dataProvider;
	}

}