<?php


namespace app\controllers;
use app\models\Category;
use app\models\Article;
use Yii;


class CategoryController extends AppController
{
    public function actionIndex(){
        $news = Article::find()->where(['cat_id'=>'11'])->limit(4)->all();
//        debug($news);
        return $this->render('index', compact('news'));
    }

    public function actionView($id){
        $id = Yii::$app->request->get('id');
//        debug($id);
        $articles = Article::find()->where(['cat_id' => $id] ) -> all();
//        debug($articles);
        return $this->render('view', compact('articles'));
    }
}