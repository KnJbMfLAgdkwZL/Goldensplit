<?php
use yii\helpers\Html;
use app\models\NewsComment;
use yii\widgets\ActiveForm;
use app\models\UserInfo;
use app\models\User;
use app\components\UsersFilesHTML;
use app\components\Access;

$this->title = 'Goldensplit | ' . $model->head;
$path = './web/MyImg/newsfiles/';
$id = $model->id;
$head = $model->head;
$imghead = $model->imghead;
$body = $model->body;
$date = $model->date;
if (!is_file($path . $imghead))
{
	$imghead = 'default_news.jpg';
}
$img = $path . $imghead;
$date = date('d.m.Y', $date);
$comments = NewsComment::GetComments_dataProvider($id);
?>
<div class="news-view">
	<h1>
		<?= Html::encode($head) ?>
	</h1>

	<div>
		<img class='imgnewshead' src='<?= $img ?>'/>
	</div>
	<div class="newsbody">
		<?= $body ?>
	</div>
	<di class="newsdate">
		<?= $date ?>
	</di>
</div>

<div class="whitespace_gfgsd"></div>

<div class="newscommentwraper" id='newscommentwraper'>
	<?php

	if (NewsComment::GetCommentsCount($id) > 0)
	{
		echo \yii\widgets\ListView::widget([
			'dataProvider' => $comments,
			'itemView' => '_newscommentitem',
		]);
	}

	/*	foreach ($comments as $v)
		{
			$user = User::findIdentity($v->user_id);
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
					<div class='userlogin'>{$username}</div>
					<img class='avatarimg' src='{$srcuserinf}'/>
					<div class='icons'>
						{$contactsuser}
					</div>
				</div>
				<div class='commentdate'>{$v->date}</div>
				<div class='commentmessage'>{$v->message}</div>

			</div>";
			echo $usercooment;
		}*/
	?>
</div>
<div class="user_add_comments" id="user_add_comments">
	<?php
	if (!Yii::$app->user->isGuest)
	{
		$form = ActiveForm::begin();
		echo $form->field($user_new_comment, 'message')->textarea(['rows' => 6]);
		?>
		<div class="form-group">
			<?= Html::submitButton($user_new_comment->isNewRecord ? 'Отправить' : 'Обновить', ['class' => $user_new_comment->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>
		<?php
		ActiveForm::end();
	}
	?>
</div>
<style>
	.news-view
	{
		min-height: 306px;
	}
	.whitespace_gfgsd
	{
		height: 70px;
	}
	/*.newscommentwraper,*/
	.user_add_comments
	{
		margin-top: 75px;
	}
	.imgnewshead
	{
		width: 250px;
		height: 250px;
		float: left;
		margin-right: 15px;
		margin-bottom: 10px;
	}
	.avatarimg
	{
		width: 150px;
		height: 150px;
		margin-bottom: 5px;
	}
	.icons > a > img
	{
		width: 30px;
		height: 30px;
	}
	.userlogin
	{
		font-size: 18px;
	}
	.usercomment
	{
		min-height: 230px;
		border: 1px solid lightgray;
		margin-bottom: 10px;
		padding: 5px 20px;
	}
	.userinfo
	{
		float: left;
		margin-right: 15px;
	}
	.commentdate
	{
		color: gray;
		font-size: 11px;
		margin-bottom: 6px;
	}
	#newscomment-message
	{
		border: 1px solid #000000;
	}
	.list-view > .summary
	{
		display: none;
	}
	.newsdate
	{
		color: #808080;
		font-weight: bold;
	}
</style>