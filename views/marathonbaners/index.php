<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Marathon Baners';
?>
<div class="marathon-baners-index">
	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Create Marathon Baners', ['create'], ['class' => 'btn btn-success']) ?>
	</p>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],
			'id',
			'head:ntext',
			//'body:ntext',
			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>
</div>