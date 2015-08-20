<?php
namespace app\components;
class UsersFilesHTML
{
	static private $path = './web/MyImg/usersavatar/';
	static public function GetSRC($v)
	{
		$src = self::$path . $v;
		if (is_file($src))
		{
			return $src;
		}
		$src = self::$path . 'default-user-image.png';
		return $src;
	}
}