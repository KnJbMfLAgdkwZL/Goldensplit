<?php
use app\models\NewsComment;
$path = './web/MyImg/newsfiles/';
$id = $model->id;
$head = $model->head;
$imghead = $model->imghead;
$body = $model->body;
$date = $model->date;
if (mb_strlen($body, 'UTF-8') >= 750)
{
	$body = substr($body, 0, 750) . ' ...';
}
$coments = NewsComment::GetCommentsCount($id);
$coments .= ' Комментариев';
if (!is_file($path . $imghead))
{
	$imghead = 'default_news.jpg';
}
$img = $path . $imghead;
$date = date('d.m.Y', $date);
?>

<div class='newsbody'>
	<a class="nimg" href='?r=news/view&id=<?= $id ?>'>
		<img src='<?= $img ?>'/>
	</a>

	<div class="nhead">
		<a href='?r=news/view&id=<?= $id ?>'>
			<?= $head ?>
		</a>
	</div>
	<div class="nanons">
		<?= $body ?>
	</div>
	<div class="ndate_coment">
		<?= $date ?> |
		<a href='?r=news/view&id=<?= $id ?>#newscommentwraper'>
			<?= $coments ?>
		</a>
	</div>
</div>