<?php
namespace app\models;
use yii\base\Model;
class UploadImgAnons extends Model
{
	public $file;
	public function rules()
	{
		return [
			[['file'], 'file'],
		];
	}
}