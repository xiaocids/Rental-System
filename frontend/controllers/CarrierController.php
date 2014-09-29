<?php

namespace frontend\controllers;
use Yii;
use frontend\modules\admin\models\JobVacation;
use frontend\modules\admin\models\JobVacationSearch;

class CarrierController extends \yii\web\Controller
{
	public $layout = 'column2';
	public function actionIndex() {
		$searchModel = new JobVacationSearch ();
		$dataProvider = $searchModel->search ( Yii::$app->request->getQueryParams () );
		
		return $this->render ( 'index', [ 
				'dataProvider' => $dataProvider,
				'searchModel' => $searchModel 
		] );
	}

}
