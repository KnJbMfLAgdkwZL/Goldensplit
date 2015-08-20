<?php

namespace app\controllers;
use Yii;
use app\models\MarathonBaners;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\components\Access;
class MarathonbanersController extends Controller
{
	public function behaviors()
	{
		if (!Access::IfUserRole('Admin'))
		{
			return $this->goHome();
		}
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
			'query' => MarathonBaners::find(),
		]);
		return $this->render('index', [
			'dataProvider' => $dataProvider,
		]);
	}
	public function actionView($id)
	{
		if (!Access::IfUserRole('Admin'))
		{
			return $this->goHome();
		}
		return $this->render('view', [
			'model' => $this->findModel($id),
		]);
	}
	public function actionCreate()
	{
		if (!Access::IfUserRole('Admin'))
		{
			return $this->goHome();
		}
		$model = new MarathonBaners();
		if ($model->load(Yii::$app->request->post()) && $model->save())
		{
			return $this->redirect(['view', 'id' => $model->id]);
		}
		else
		{
			return $this->render('create', [
				'model' => $model,
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
		if ($model->load(Yii::$app->request->post()) && $model->save())
		{
			return $this->redirect(['view', 'id' => $model->id]);
		}
		else
		{
			return $this->render('update', [
				'model' => $model,
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
		if (!Access::IfUserRole('Admin'))
		{
			return $this->goHome();
		}
		if (($model = MarathonBaners::findOne($id)) !== null)
		{
			return $model;
		}
		else
		{
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}