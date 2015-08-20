<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="news-form">
	<?php
	$form = ActiveForm::begin(['options' => ['id' => 'FileUploadForm', 'enctype' => 'multipart/form-data'],]);
	?>
	<?= $form->field($model, 'head')->textInput() ?>
	<?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
	<?= $form->field($model, 'anons')->textarea(['rows' => 6]) ?>
	<?php
	echo $form->field($imghead, 'file')->fileInput()->label('Изображение заголовка');
	echo $form->field($imganons, 'file')->fileInput()->label('Изображение анонса');
	?>
	<?= $form->field($model, 'bind')->checkbox() ?>

	<?= $form->field($model, 'priority')->textInput() ?>

	<!--<?= $form->field($model, 'date')->textInput() ?>-->
	<div id="dsfsdf" style="height: 60px"></div>
	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>
	<?php ActiveForm::end(); ?>
</div>
<style>
	#news-head, #news-anons
	{
		border-color: #000000;
		width: 500px;
	}
	#cke_news-body
	{
		border-color: #000000;
	}
	#uploadimghead-file, #uploadimganons-file
	{
		border: 1px solid #000000;
		display: inline-block;
		width: 250px;
	}
	.field-uploadimghead-file > .control-label, .field-uploadimganons-file > .control-label
	{
		width: 245px;
	}
	.field-news-bind
	{
		display: inline-block;
		width: 245px;
		margin-left: 40px;
	}
	.field-news-priority
	{
		/*display: inline-block;*/
		width: 245px;
		display: none;
	}
	.field-uploadimganons-file
	{
		margin-left: 40px;
		display: inline-block;
	}
	.field-uploadimghead-file
	{
		display: inline-block;
		margin-top: 25px;
		margin-left: 40px;
	}
	.field-news-anons
	{
		display: inline-block;
		float: left;
	}
</style>
<script src="./web/MyJs/jquery-2.1.4.js"></script>
<script src="./web/MyJs/ckeditor/ckeditor.js"></script>
<script>
	CKEDITOR.replace('News[body]');
	$("#FileUploadForm").submit(function (event)
	{
		CKEDITOR.instances['news-body'].updateElement();
		return true;
	});
	$('#news-bind').click(function ()
	{
		if ($(this).prop("checked"))
		{
			$('.field-news-priority').css('display', 'inline-block');
			$('#dsfsdf').css('height', '26px');
		}
		else
		{
			$('.field-news-priority').hide();
			$('#dsfsdf').css('height', '60px');
		}
	});
	if ($('#news-bind').prop("checked"))
	{
		$('.field-news-priority').css('display', 'inline-block');
		$('#dsfsdf').css('height', '26px');
	}
	else
	{
		$('.field-news-priority').hide();
		$('#dsfsdf').css('height', '60px');
	}
</script>