<?php

namespace app\modules\m1\controllers;

use yii\web\Controller;

class DefaultController extends Controller {
	public function actionIndex() {
		$this->layout = '/dashboard';
		
		return $this->render ( 'index' );
	}
}
