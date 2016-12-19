<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;
use app\models\UserInfo;
use app\components\UsersFilesHTML;
use app\components\Access;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
	<head>
		<meta charset="<?= Yii::$app->charset ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?= Html::csrfMetaTags() ?>
		<title><?= Html::encode($this->title) ?></title>
		<?php $this->head() ?>
		<link href="/web/css/MyStyle.css" rel="stylesheet"/>
	</head>
	<body>
		<?php $this->beginBody() ?>

		<div class="wrap">
			<?php
			$logo = '<img id="menulogoimg" src="/web/MyImg/goldensplit.png">';
			NavBar::begin([
				'brandLabel' => $logo,
				'brandUrl' => Yii::$app->homeUrl,
				'options' => [
					'class' => 'navbar-inverse navbar-fixed-top',
				],
			]);

			$items = [];
			$items[] = ['options' => ['class' => 'leftitems'], 'label' => 'Новости', 'url' => ['/site/index']];
			$items[] = ['options' => ['class' => 'leftitems'], 'label' => 'Игры', 'url' => ['/site/games']];
			$items[] = ['options' => ['class' => 'leftitems'], 'label' => 'Марафон', 'url' => ['/site/marathon']];
			if (Access::IfUserRole('Admin'))
			{
				$items[] = ['options' => ['class' => 'leftitems'], 'label' => 'Админка', 'url' => ['/site/admin']];
			}
			if (Yii::$app->user->isGuest)
			{
				$items[] = ['label' => 'Регистрация', 'options' => ['class' => 'logrefprof'], 'url' => ['/site/registration']];
				$items[] = ['label' => 'Вход',
					'options' => ['class' => 'logrefprof'],
					'linkOptions' => ['id' => 'loginbt'],
					'url' => ['/site/login']];
			}
			else
			{
				$items[] = ['label' => '<img src="/web/MyImg/logoutico.png"/>',
					'url' => ['/site/logout'],
					'options' => ['class' => 'leftbutonprof logoutico'],
					'linkOptions' => ['data-method' => 'post']];
				$id = Access::GetUserId();
				$userinfo = UserInfo::GetUserInfo($id);
				$src = UsersFilesHTML::GetSRC($userinfo->avatar);
				$name = Yii::$app->user->identity->username;
				$name .= "<img src='{$src}'/>";
				$items[] = ['label' => "Добро пожаловать, {$name}", 'url' => ['/site/profile'],
					'options' => ['class' => 'leftbutonprof profname'],
					'linkOptions' => ['id' => 'loginbt'],
				];
			}
			echo Nav::widget([
				'options' => ['class' => 'navbar-nav navbar-right'],
				'items' => $items,
				'encodeLabels' => false,
			]);
			NavBar::end();
			?>

			<div class="container">
				<?= $content ?>
			</div>

		</div>

		<footer class="footer">
			<div class="container">

			</div>
		</footer>

		<?php $this->endBody() ?>
	</body>
</html>
<?php $this->endPage() ?>
