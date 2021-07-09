<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category_v}}`.
 */
class m210709_091307_create_category_v_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category_v}}', [
            'id' => $this->primaryKey(),
            'title' => $this->text(),
            'title_ru' =>$this->text(),
            'title_eng' =>$this->text(),
            'description'=>$this->text(),
            'description_ru'=>$this->text(),
            'description_eng'=>$this->text(),
            'logo'=>$this->text(),
            'keywords'=>$this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category_v}}');
    }
}
