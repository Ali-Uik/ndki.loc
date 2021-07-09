<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%articles}}`.
 */
class m210709_051916_create_articles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%articles}}', [
            'id' => $this->primaryKey(),
            'cat_id'=>$this->integer(),
            'title' => $this->text(),
            'title_ru' =>$this->text(),
            'title_eng' =>$this->text(),
            'description'=>$this->text(),
            'description_ru'=>$this->text(),
            'description_eng'=>$this->text(),
            'content'=>$this->text(),
            'content_ru'=>$this->text(),
            'content_eng'=>$this->text(),
            'images'=>$this->text(),
            'keywords'=>$this->text(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%articles}}');
    }
}
