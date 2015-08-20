<?php
namespace app\models;
use yii\data\ActiveDataProvider;
use Yii;
class News extends \yii\db\ActiveRecord
{
	public static function tableName()
	{
		return 'news';
	}
	public function rules()
	{
		return [
			[['head', 'body', 'anons'], 'required'],
			[['head', 'body', 'anons'], 'string'],
			[['bind'], 'boolean'],
			[['priority', 'date'], 'integer'],
			[['imghead', 'imganons'], 'string', 'max' => 255]
		];
	}
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'head' => 'Заголовок',
			'body' => 'Текст новости',
			'anons' => 'Анонс',
			'imghead' => 'Изображение в заголовке',
			'imganons' => 'Изображение анонса',
			'bind' => 'Закрепить',
			'priority' => 'Приоритет для закрепленных',
			'date' => 'Дата',
		];
	}
	public static function GetAllNews()
	{
		$news = self::find()->orderBy(['date' => SORT_DESC])->all();
		if (!count($news))
		{
			return null;
		}
		return $news;
	}
	public static function GetAllBindNews()
	{
		$news = self::find()->where(["bind" => '1'])->orderBy(['priority' => SORT_DESC])->all();
		if (!count($news))
		{
			return null;
		}
		return $news;
	}
	public static function GetAllNews_dataProvider()
	{
		$dataProvider = new \yii\data\ActiveDataProvider([
			'query' => \app\models\News::find()->orderBy(['date' => SORT_DESC]),
		]);
		return $dataProvider;
	}
	public static function GetAllBindNews_dataProvider()
	{
		$dataProvider = new ActiveDataProvider([
			'query' => News::find()->where(['bind' => '1'])->orderBy(['date' => SORT_DESC]),
		]);
		return $dataProvider;
	}
}