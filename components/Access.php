<?php
namespace app\components;
use Yii;
use yii\web\ForbiddenHttpException;
use yii\web\BadRequestHttpException;
class Access
{
	static function IfUserRole($role)
	{
		if (!Yii::$app->user->isGuest)
		{
			if (Yii::$app->user->identity->role == $role)
			{
				return true;
			}
		}
		return false;
	}
	static function User($role)
	{
		if (!Yii::$app->user->isGuest)
		{
			if (Yii::$app->user->identity->role == $role)
			{
				return;
			}
		}
		throw new ForbiddenHttpException('Access denied');
	}
	static function Chek($v)
	{
		if (isset($v))
		{
			if (!empty($v))
			{
				return;
			}
		}
		throw new BadRequestHttpException('Variable is Empty');
	}
	static function ChekIs($v)
	{
		if (isset($v))
		{
			if (!empty($v))
			{
				return true;
			}
		}
		return false;
	}
	static function GetUserId()
	{
		if (!Yii::$app->user->isGuest)
		{
			if (self::ChekIs(Yii::$app->user->identity->id))
			{
				return Yii::$app->user->identity->id;
			}
		}
		return NULL;
	}
}