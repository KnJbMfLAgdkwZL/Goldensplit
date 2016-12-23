<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\components\Access;
use app\components\UsersFilesHTML;

$this->title = 'Goldensplit | Профиль';

$username = Yii::$app->user->identity->username;
echo "<h1 id='username'>{$username}</h1>";
$src = UsersFilesHTML::GetSRC($model->avatar);
?>

<img id='avatarimg' src="<?= $src ?>"/>
<div class="stype-form">
	<?php
	$form = ActiveForm::begin(['options' => ['id' => 'FileUploadForm', 'enctype' => 'multipart/form-data']]);
	echo $form->field($upload, 'file')->fileInput()->label('Avatar');
	?>
	<?= $form->field($model, 'YouTube')->textInput(['maxlength' => 255]) ?>
	<?= $form->field($model, 'Twitch')->textInput(['maxlength' => 255]) ?>
	<?= $form->field($model, 'VK')->textInput(['maxlength' => 255]) ?>
	<?= $form->field($model, 'Twitter')->textInput(['maxlength' => 255]) ?>

	<?= $form->field($model, 'About')->textarea(['rows' => 6]) ?>
	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn
        btn-primary']) ?>
	</div>
	<?php ActiveForm::end(); ?>
</div>
<div id='icons'>
	<?php
	if (Access::ChekIs($model->YouTube))
	{
		$src = $model->YouTube;
		/*if (strpos($src, 'http://') === false && strpos($src, 'https://') === false)
		{
			$src = 'http://' . $src;
		}*/
		echo "<a href='https://www.youtube.com/channel/{$src}'>
			<img src='/web/MyImg/youtubeimg.png'/>
		</a>";
	}
	if (Access::ChekIs($model->Twitch))
	{
		$src = $model->Twitch;
		/*if (strpos($src, 'http://') === false && strpos($src, 'https://') === false)
		{
			$src = 'http://' . $src;
		}*/
		echo "<a href='http://www.twitch.tv/{$src}'>
			<img src='/web/MyImg/twitchimg.png'/>
		</a>";
	}
	if (Access::ChekIs($model->VK))
	{
		$src = $model->VK;
		/*if (strpos($src, 'http://') === false && strpos($src, 'https://') === false)
		{
			$src = 'http://' . $src;
		}*/
		echo "<a href='http://vk.com/{$src}'>
			<img src='/web/MyImg/vkimg.png'/>
		</a>";
	}
	if (Access::ChekIs($model->Twitter))
	{
		$src = $model->Twitter;
		/*if (strpos($src, 'http://') === false && strpos($src, 'https://') === false)
		{
			$src = 'http://' . $src;
		}*/
		echo "<a href='https://twitter.com/{$src}'>
			<img src='/web/MyImg/twiterimg.png'/>
		</a>";
	}
	?>
</div>

<style>
	#uploadform-file
	{
		border: 1px solid black;
		/*height: 34px;*/
		padding: 5px;
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
		margin-top: 20px;
		/*position: absolute;
		top: 143px;
		left: 290px;*/
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