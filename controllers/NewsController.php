<?php

namespace app\controllers;
use app\models\News;
use yii;

class NewsController extends AppController{

	public function actionIndex() {
		return $this->render('index');

	}

}