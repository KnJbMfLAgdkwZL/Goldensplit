<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'News';
?>
<div class="news-index">
	<p>
		<?= Html::a('Создать новость', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<h1>Закрепленные новости</h1>

	<div>Приоритет определяет в каком порядке новости будут выводится на страницу. Первыми всегда идут новости с высоким
		приоритетом.
	</div>
	<?= GridView::widget([
		'dataProvider' => $dataPriority,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],
			//'id',
			'head:ntext',
			//'body:ntext',
			'anons:ntext',
			// 'imganons',
			// 'bind:boolean',
			//'date',
			[
				'attribute' => 'date',
				'format' => 'html',
				'value' => function ($data)
				{
					return date('d.m.Y', $data->date);
				}
			],
			'priority',
			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>
	<h1>Все новости</h1>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],
			//'id',
			'head:ntext',
			//'body:ntext',
			'anons:ntext',
			// 'imganons',
			// 'bind:boolean',
			// 'priority',
			//'date',
			[
				'attribute' => 'date',
				'format' => 'html',
				'value' => function ($data)
				{
					return date('d.m.Y', $data->date);
				}
			],
			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>
</div>