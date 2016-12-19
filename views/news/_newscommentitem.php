<?php
use yii\helpers\Html;
use app\models\NewsComment;
use yii\widgets\ActiveForm;
use app\models\UserInfo;
use app\models\User;
use app\components\UsersFilesHTML;
use app\components\Access;
$v = $model;
$user = User::findIdentity($v->user_id);
if (Access::ChekIs($user))
{
	$username = $user->username;
	$userinfo = UserInfo::GetUserInfo($v->user_id);
	$srcuserinf = UsersFilesHTML::GetSRC($userinfo->avatar);
	$v->date = date('H:i:s d.m.Y', $v->date);
	$contactsuser = '';
	if (Access::ChekIs($userinfo->YouTube))
	{
		$src = $userinfo->YouTube;
		if (strpos($src, 'http://') === false && strpos($src, 'https://') === false)
		{
			$src = 'http://' . $src;
		}
		$contactsuser .= "<a href='{$src}'>
			<img src='/web/MyImg/youtubeimg.png'/>
		</a>";
	}
	if (Access::ChekIs($userinfo->Twitch))
	{
		$src = $userinfo->Twitch;
		if (strpos($src, 'http://') === false && strpos($src, 'https://') === false)
		{
			$src = 'http://' . $src;
		}
		$contactsuser .= "<a href='{$src}'>
			<img src='/web/MyImg/twitchimg.png'/>
		</a>";
	}
	if (Access::ChekIs($userinfo->VK))
	{
		$src = $userinfo->VK;
		if (strpos($src, 'http://') === false && strpos($src, 'https://') === false)
		{
			$src = 'http://' . $src;
		}
		$contactsuser .= "<a href='{$src}'>
			<img src='/web/MyImg/vkimg.png'/>
		</a>";
	}
	if (Access::ChekIs($userinfo->Twitter))
	{
		$src = $userinfo->Twitter;
		if (strpos($src, 'http://') === false && strpos($src, 'https://') === false)
		{
			$src = 'http://' . $src;
		}
		$contactsuser .= "<a href='{$src}'>
			<img src='/web/MyImg/twiterimg.png'/>
		</a>";
	}
	$v->message = strip_tags($v->message);
	$usercooment = "
		<div class='usercomment'>
			<div class='userinfo'>
				<div class='userlogin'>
				<a href='?r=site/profile_view&id={$v->user_id}'>
				{$username}
				</a>
				</div>
				<img class='avatarimg' src='{$srcuserinf}'/>
				<div class='icons'>
					{$contactsuser}
				</div>
			</div>
			<div class='commentdate'>{$v->date}</div>
			<div class='commentmessage'>{$v->message}</div>

		</div>";
	echo $usercooment;
}
