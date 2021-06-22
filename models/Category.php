<?php


namespace app\models;
use yii\db\ActiveRecord;


class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category'; // TODO: Change the autogenerated stub
    }
    public function getArticle(){
        return $this->hasMany(Article::className(),[' cat_id'=>'id']);
    }
}