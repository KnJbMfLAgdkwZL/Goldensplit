<?php
use yii\helpers\Html;

$this->title = 'Update News: ' . ' ' . $model->id;
?>
<div class="news-update">
	<h1><?= Html::encode($this->title) ?></h1>
	<?= $this->render('_form', [
		'model' => $model,
		'imghead' => $imghead,
		'imganons' => $imganons,
	]) ?>
</div>
