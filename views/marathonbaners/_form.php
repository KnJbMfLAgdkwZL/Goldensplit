<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="marathon-baners-form">
	<?php $form = ActiveForm::begin(['options' => ['id' => 'marathonbanersform']]); ?>
	<?= $form->field($model, 'head')->textarea(['rows' => 6]) ?>
	<?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>
	<?php ActiveForm::end(); ?>
</div>
<script src="./web/MyJs/jquery-2.1.4.js"></script>
<script src="./web/MyJs/ckeditor/ckeditor.js"></script>
<script>
	CKEDITOR.replace('MarathonBaners[body]');
	$("#marathonbanersform").submit(function (event)
	{
		CKEDITOR.instances['marathonbaners-body'].updateElement();
		return true;
	});
</script>