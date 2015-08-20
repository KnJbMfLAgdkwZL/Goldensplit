<?php
namespace app\controllers;
use app\components\Access;
use Yii;
use app\models\News;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\UploadImgHead;
use app\models\UploadImgAnons;
use app\models\NewsComment;
class NewsController extends Controller
{
	public function behaviors()
	{
		return [
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'delete' => ['post'],
				],
			],
		];
	}
	public function actionIndex()
	{
		if (!Access::IfUserRole('Admin'))
		{
			return $this->goHome();
		}
		$dataProvider = new ActiveDataProvider([
			'query' => News::find(),
		]);
		$dataPriority = new ActiveDataProvider([
			'query' => News::find()->where(['bind' => '1']),
		]);
		return $this->render('index', [
			'dataProvider' => $dataProvider,
			'dataPriority' => $dataPriority,
		]);
	}
	public function actionView($id)
	{
		$model = $this->findModel($id);
		$user_new_comment = new NewsComment();
		if (!Yii::$app->user->isGuest)
		{
			if ($user_new_comment->load(Yii::$app->request->post()))
			{
				$user_new_comment->news_id = $id;
				$user_new_comment->user_id = Access::GetUserId();
				$user_new_comment->date = time();
				$user_new_comment->message = strip_tags($user_new_comment->message);
				$user_new_comment->save();
				$page = Yii::$app->request->get('page');
				return $this->redirect(['view', 'id' => $id, 'page' => $page, '#' => 'user_add_comments']);
			}
		}
		return $this->render('view', [
			'model' => $model,
			'user_new_comment' => $user_new_comment,
		]);
	}
	public function actionCreate()
	{
		if (!Access::IfUserRole('Admin'))
		{
			return $this->goHome();
		}
		$model = new News();
		$imghead = new UploadImgHead();
		$imganons = new UploadImgAnons();
		if ($model->load(Yii::$app->request->post()))
		{
			function ImgSave($upload)
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
							$path = './web/MyImg/newsfiles/';
							$avatar->saveAs($path . $randfilenamename);
							return $randfilenamename;
						}
					}
				}
				return '';
			}

			$model->imghead = ImgSave($imghead);
			$model->imganons = ImgSave($imganons);
			$model->date = time();
			$model->save();
			return $this->redirect(['view', 'id' => $model->id]);
		}
		else
		{
			$model->priority = 0;
			return $this->render('create', [
				'model' => $model,
				'imghead' => $imghead,
				'imganons' => $imganons,
			]);
		}
	}
	public function actionUpdate($id)
	{
		if (!Access::IfUserRole('Admin'))
		{
			return $this->goHome();
		}
		$model = $this->findModel($id);
		$imghead = new UploadImgHead();
		$imganons = new UploadImgAnons();
		if ($model->load(Yii::$app->request->post()))
		{
			function ImgSave($upload)
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
							$path = './web/MyImg/newsfiles/';
							$avatar->saveAs($path . $randfilenamename);
							return $randfilenamename;
						}
					}
				}
				return '';
			}

			$ih = ImgSave($imghead);
			$ia = ImgSave($imganons);
			if (Access::ChekIs($ih))
			{
				$model->imghead = $ih;
			}
			if (Access::ChekIs($ia))
			{
				$model->imganons = $ia;
			}
			$model->save();
			return $this->redirect(['view', 'id' => $model->id]);
		}
		else
		{
			return $this->render('update', [
				'model' => $model,
				'imghead' => $imghead,
				'imganons' => $imganons,
			]);
		}
	}
	public function actionDelete($id)
	{
		if (!Access::IfUserRole('Admin'))
		{
			return $this->goHome();
		}
		$this->findModel($id)->delete();
		return $this->redirect(['index']);
	}
	protected function findModel($id)
	{
		if (($model = News::findOne($id)) !== null)
		{
			return $model;
		}
		else
		{
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}