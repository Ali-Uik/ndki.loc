<?php


namespace app\controllers;
use app\models\News;
use Yii;

class NewsController extends AppController
{
    public function actionIndex(){
        $articles=News::find()->all();
        return $this->render('index', compact('articles'));
    }

//    public function ActionView($id){
//        $id = Yii::$app->request->(id);
//        debug($id);
//    }
}