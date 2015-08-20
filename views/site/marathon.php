<?php
use app\models\MarathonBaners;
use app\components\Access;

$this->title = 'Goldensplit | Марафон';
?>
<div class="page-content">
	<div id="marafoncontent">
		<iframe id="twichvideo"
				src="http://www.twitch.tv/goldensplit/embed"
				scrolling="no"
				frameborder="0"
				height="378"
				width="620">
		</iframe>

		<iframe id="twichchat"
				src="http://www.twitch.tv/goldensplit/chat?popout="
				scrolling="no"
				frameborder="0"
				height="378"
				width="350">
		</iframe>

	</div>
	<div id="vktwiter">
		<a href="https://twitter.com/goldensplit" target="_blank" class="link">
			<img src="/web/MyImg/twiterimg.png"/>
		</a>
		<a href="http://vk.com/gamesdonequick" target="_blank" class="link">
			<img src="/web/MyImg/vkimg.png"/>
		</a>
	</div>
</div>

<?php
$mb = MarathonBaners::GetAllMarathonBaners();
$mbhead = '';
$mbbody = '';
$firstid = null;
foreach ($mb as $v)
{
	$id = $v->id;
	$head = $v->head;
	$body = $v->body;
	$mbhead .= "<span id='mbhead{$id}'>{$head}</span>";
	$mbbody .= "<div id='mbbody{$id}'>{$body}</div>";
	if (!Access::ChekIs($firstid))
	{
		$firstid = $id;
	}
}
?>
<div class="MarathonBaners">
	<div class="mbhead">
		<?= $mbhead ?>
	</div>
	<div class="mbbody">
		<?= $mbbody ?>
	</div>
</div>

<style>
	.MarathonBaners
	{
		text-align: center;
	}
	.mbhead > span
	{
		margin: 10px;
		color: #C7A134;
		font-weight: bold;
		cursor: pointer;
	}
	.mbhead
	{
		margin-bottom: 25px;
	}
	.mbbody > div
	{
		/*border: 1px solid #000000;*/
		display: none;
		text-align: left;
	}
</style>
<script src="./web/MyJs/jquery-2.1.4.js"></script>
<script>
	var cur = <?= $firstid ?>;
	$('#mbbody' + cur).css('display', 'inline-block');
	$('.mbhead > span').click(function ()
	{
		$('#mbbody' + cur).css('display', 'none');
		cur = $(this).attr('id');
		cur = cur.replace('mbhead', '');
		$('#mbbody' + cur).css('display', 'inline-block');
	});
</script>