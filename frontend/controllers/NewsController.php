<?php

namespace frontend\controllers;

class NewsController extends \yii\web\Controller
{
	public $layout = 'column2';
	
    public function actionIndex()
    {
        return $this->render('index');
    }

}
