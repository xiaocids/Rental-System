<?php

namespace frontend\controllers;
use Yii;
use frontend\modules\admin\models\JobVacation;
use frontend\modules\admin\models\JobVacationSearch;
use frontend\modules\admin\models\Applicant;

class CareerController extends \yii\web\Controller
{
	public $layout = 'column2';
	
	public function actions()
	{
		return [
		'captcha' => [
		'class' => 'yii\captcha\CaptchaAction',
		],
		];
	}
	
	public function actionIndex() {
		$searchModel = new JobVacationSearch ();
		$dataProvider = $searchModel->searchActive(Yii::$app->request->getQueryParams () );
		
		return $this->render ( 'index', [ 
				'dataProvider' => $dataProvider,
				'searchModel' => $searchModel 
		] );
	}
	
	public function actionDetail($id){
		return $this->render('detail', [
				'model' => $this->findModel($id),
				]);
	}
	
	/**
	 * Finds the Page model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return Page the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if (($model = JobVacation::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
	
	public function actionApply($id){
		$this->layout = 'column1';
		
		$job = $this->findModel($id);
		
		$model = new Applicant;
		$model->job_id = $id;
		$model->phone ='ada.jpg';
		
		if ($model->load(Yii::$app->request->post())) {
			$model->applicant_id = 'AP001';
			$model->created_at = date('Y-m-d h:m:s', time());
			if($model->save()){
				return $this->redirect(['success']);
			}else{
				return $this->render('apply', [
						'model' => $model,
						'job' => $job,
						]);
			}
				
		} else {
			return $this->render('apply', [
					'model' => $model,
					'job' => $job,
					]);
		}
	}
	
	public function actionSuccess()
	{
		return $this->render('success');
	}

	public function actionTellFriend()
	{
		return $this->render('tellFriend');
	}
}
