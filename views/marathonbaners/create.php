<?php
use yii\helpers\Html;

$this->title = 'Create Marathon Baners';
?>
<div class="marathon-baners-create">
	<h1><?= Html::encode($this->title) ?></h1>
	<?= $this->render('_form', [
		'model' => $model,
	]) ?>
</div>