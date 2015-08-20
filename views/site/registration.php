<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Goldensplit | Регистрация';
?>

<div class="userregistratiowraper">
	<h1>Регистрация нового пользователя</h1>
<div class="userregistratio">

	<?php
	$form = ActiveForm::begin();
	echo $form->field($model, 'username')->textInput()->label('Логин');
	echo $form->field($model, 'password')->textInput()->label('Пароль');
	?>
	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Зарегистрироватся' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>
	<?php ActiveForm::end(); ?>
</div>
</div>

<style>
	.userregistratiowraper
	{
		/*text-align: center;*/
	}
	.userregistratio
	{
		display: inline-block;
		text-align: left;
		width: 250px;
	}
</style>