<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m210709_050923_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'parent_id' => $this ->integer(),
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
        $this->dropTable('{{%category}}');
    }
}
