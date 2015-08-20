<?php
use app\components\Access;

$this->title = 'Goldensplit | Новости';
$path = './web/MyImg/newsfiles/';
?>
<div class="allnewscontent">
	<div class="prioritynews">
		<div class="innerpriritywraper">
			<?php
			for ($i = 0; $i < count($bind); $i++)
			{
				if ($i >= 3)
				{
					break;
				}
				$b = $bind[$i];
				$id = $b->id;
				$head = $b->head;
				$imganons = $b->imganons;
				$anons = $b->anons;
				$anons = substr($anons, 0, 120);
				if (!is_file($path . $imganons))
				{
					$imganons = 'default_news.jpg';
				}
				$img = $path . $imganons;
				$anonsstr = "
			<a class='nbaninsurl' href='?r=news/view&id={$id}'>
				<div class='nbacontent' style='background-image: url({$img});'>
					<div class='nbagradient'>
						<div class='nbanhead'>{$head}</div>
						<div class='nbaanons'>{$anons}</div>
					</div>
				</div>
			</a>";
				echo $anonsstr;
			}
			?>
		</div>
	</div>
	<div class="allnews">
		<?php
		echo \yii\widgets\ListView::widget([
			'dataProvider' => $news,
			'itemView' => '_item',
		]);
		?>
	</div>
</div>
<style>
	.allnews
	{
		text-align: center;
	}
	.newsbody
	{
		display: inline-block;
		text-align: left;
		/*border: 1px solid #000;*/
		margin-top: 20px;
		min-height: 210px;
		/*width: 800px;*/
		width: 70.2235%;
	}
	.nimg
	{
		text-decoration: none !important;
		float: left;
		margin-right: 10px;
	}
	.nimg > img
	{
		margin: 5px;
		width: 200px;
		height: 200px;
	}
	.nhead
	{
		top: -83px;
		left: 10px;
		text-decoration: none;
		font-size: 20px;
	}
	.nhead > a
	{
		color: #000000;
		text-decoration: underline;
	}
	.nanons
	{
		min-height: 145px;
	}
	.list-view > .summary
	{
		display: none;
	}
	.nbacontent
	{
		height: 250px;
		width: 250px;
		text-align: center;
		border: 1px solid #000000;
		display: inline-block;
		float: left;
		margin: 10px;
		background-size: cover;
	}
	.nbagradient
	{
		height: 250px;
	}
	.nbaanons
	{
		color: #000000;
	}
	.nbanhead
	{
		color: #000000;
	}
	.prioritynews
	{
		text-align: center;
	}
	.innerpriritywraper
	{
		display: inline-block;
	}
	.nbanhead, .nbaanons
	{
		font-size: 18px;
	}
	.nbaanons
	{
		text-align: left;
		margin-top: 110px;
		padding: 5px;
		display: none;
	}
	.nbaninsurl:hover .nbaanons
	{
		display: block;

	}
	.nbaninsurl:hover .nbagradient
	{
		background: linear-gradient(to top, rgba(201, 194, 170, 1), rgba(0, 0, 0, 0));
	}
</style>