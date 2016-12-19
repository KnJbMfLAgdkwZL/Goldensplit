<?php
use app\components\Access;
?>

<h1 id="username">admin</h1>
<img id="avatarimg" src="./web/MyImg/usersavatar/2e8c8e559bd7440d6889bbe954599175.jpg">
<div class="stype-form">
	<div id="FileUploadForm">
		<div class="form-group field-userinfo-about">
			<label class="control-label">Обо мне</label>
			<div>
				<?= $model->About ?>
			</div>
		</div>
	</div>
</div>
<?php
?>
<div id='icons'>
	<?php
	if (Access::ChekIs($model->YouTube))
	{
		$src = $model->YouTube;
		if (strpos($src, 'http://') === false && strpos($src, 'https://') === false)
		{
			$src = 'http://' . $src;
		}
		echo "<a href='{$src}'>
			<img src='/web/MyImg/youtubeimg.png'/>
		</a>";
	}
	if (Access::ChekIs($model->Twitch))
	{
		$src = $model->Twitch;
		if (strpos($src, 'http://') === false && strpos($src, 'https://') === false)
		{
			$src = 'http://' . $src;
		}
		echo "<a href='{$src}'>
			<img src='/web/MyImg/twitchimg.png'/>
		</a>";
	}
	if (Access::ChekIs($model->VK))
	{
		$src = $model->VK;
		if (strpos($src, 'http://') === false && strpos($src, 'https://') === false)
		{
			$src = 'http://' . $src;
		}
		echo "<a href='{$src}'>
			<img src='/web/MyImg/vkimg.png'/>
		</a>";
	}
	if (Access::ChekIs($model->Twitter))
	{
		$src = $model->Twitter;
		if (strpos($src, 'http://') === false && strpos($src, 'https://') === false)
		{
			$src = 'http://' . $src;
		}
		echo "<a href='{$src}'>
			<img src='/web/MyImg/twiterimg.png'/>
		</a>";
	}
	?>
</div>

<style>
	#uploadform-file
	{
		border: 1px solid black;
		height: 34px;
	}
	.form-control, #uploadform-file
	{
		display: inline-block;
		width: 300px;
	}
	.control-label
	{
		width: 70px;
	}
	.stype-form
	{
		position: absolute;
		top: 143px;
		left: 290px;
	}
	#avatarimg
	{
		margin-right: 30px;
		width: 200px;
		height: 200px;
	}
	.btn, .btn-primary
	{
		background-color: #45525F;
	}
	.form-group
	{
		margin-bottom: 0px;
	}
	#icons
	{
		margin-top: 10px;
		width: 200px;
		text-align: center;
	}
	#icons > a
	{
		text-decoration: none;
	}
	#icons > a > img
	{
		width: 38px;
		height: 38px;
	}
	.help-block
	{
		margin-bottom: 7px;
	}
	.stype-form > form > .form-group > button
	{
		float: right;
	}
	.stype-form > form > div > label, #username
	{
		color: #C6A23D;
	}
</style>