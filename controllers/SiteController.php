<?php
namespace app\controllers;
use app\models\News;
use app\models\UserInfo;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\components\Access;
use yii\web\UploadedFile;
use app\models\UploadForm;
use yii\web\User;
class SiteController extends Controller
{	
	/*public function beforeAction($action)
	{
		echo '<pre>';
		echo '$_GET';
		print_r($_GET);
		echo '$_POST';
		print_r($_POST);
		echo '$_SESSION';
		session_start();
		print_r($_SESSION);
		echo '</pre>';
		
		
        $this->enableCsrfValidation = ($action->id !== "login");
        return parent::beforeAction($action);
    }*/
	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'only' => ['logout'],
				'rules' => [
					[
						'actions' => ['logout'],
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'logout' => ['post'],
				],
			],
		];
	}
	public function actions()
	{
		return [
			'error' => [
				'class' => 'yii\web\ErrorAction',
			],
			'captcha' => [
				'class' => 'yii\captcha\CaptchaAction',
				'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
			],
		];
	}
	public function actionLogin()
	{
		if (!\Yii::$app->user->isGuest)
		{
			return $this->goHome();
		}
		$model = new LoginForm();
		if ($model->load(Yii::$app->request->post()) && $model->login())
		{
			return $this->goBack();
		}
		else
		{
			return $this->render('login', ['model' => $model,]);
		}
	}
	public function actionLogout()
	{
		Yii::$app->user->logout();
		return $this->goHome();
	}
	//
	public function actionIndex()
	{
		$news = News::GetAllNews_dataProvider();
		$bind = News::GetAllBindNews();
		return $this->render('index', ['news' => $news, 'bind' => $bind]);
	}
	public function actionGames()
	{
		return $this->render('games');
	}
	public function actionMarathon()
	{
		return $this->render('marathon');
	}
	public function actionRegistration()
	{
		if (!Yii::$app->user->isGuest)
		{
			return $this->goHome();
		}
		$model = new \app\models\User();
		if ($model->load(Yii::$app->request->post()))
		{
			$model->role = 'User';
			$model->save();
			$userinfo = new UserInfo();
			$userinfo->user_id = $model->id;
			$userinfo->save();
			return $this->render('registrationok', ['username' => $model->username, 'password' => $model->password]);
		}
		return $this->render('registration', ['model' => $model]);
	}
	public function actionProfile_view($id)
	{
		$model = UserInfo::GetUserInfo($id);
		if(!Access::ChekIs($model))
		{
			return $this->goHome();
		}
		return $this->render('profile_view', ['model' => $model]);
	}
	public function actionProfile()
	{
		if (Yii::$app->user->isGuest)
		{
			return $this->goHome();
		}
		$id = Access::GetUserId();
		$model = UserInfo::GetUserInfo($id);
		$upload = new UploadForm();
		if (!Access::ChekIs($model))
		{
			return $this->goHome();
		}
		if ($model->load(Yii::$app->request->post()))
		{
			$avatar = UploadedFile::getInstance($upload, 'file');
			if ($avatar && $upload->validate())
			{
				$allowtypes = ['jpeg', 'png', 'jpg', 'gif'];
				$curtype = $avatar->extension;
				$curtype = strtolower($curtype);
				if (in_array($curtype, $allowtypes))
				{
					$cur = round($avatar->size / 1024 / 1024, 2);
					if ($cur < 5)
					{
						$cur = $avatar->size;
						$randname = '' . rand() . time() . rand() . time() . $cur;
						$randname = md5($randname);
						$randfilenamename = "{$randname}.{$curtype}";
						$path = './web/MyImg/usersavatar/';
						$avatar->saveAs($path . $randfilenamename);
						if (Access::ChekIs($model->avatar))
						{
							if (is_file($path . $model->avatar))
							{
								@unlink($path . $model->avatar);
							}
						}
						$model->avatar = $randfilenamename;
					}
				}
			}
			$model->YouTube = strip_tags($model->YouTube);
			$model->Twitch = strip_tags($model->Twitch);
			$model->VK = strip_tags($model->VK);
			$model->Twitter = strip_tags($model->Twitter);
			$model->save();
			$this->redirect('/index.php?r=site/profile');
		}
		return $this->render('profile', ['model' => $model, 'upload' => $upload]);
	}
	public function actionAdmin()
	{
		if (!Access::IfUserRole('Admin'))
		{
			return $this->goHome();
		}
		return $this->render('admin');
	}
}