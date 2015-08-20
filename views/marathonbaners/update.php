<?php
use yii\helpers\Html;

$this->title = 'Update Marathon Baners: ' . ' ' . $model->id;
?>
<div class="marathon-baners-update">
	<h1><?= Html::encode($this->title) ?></h1>
	<?= $this->render('_form', [
		'model' => $model,
	]) ?>
</div>