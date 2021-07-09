<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%language}}`.
 */
class m210709_061438_create_language_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%language}}', [
            'id' => $this->primaryKey(),
            'title'=>$this->text(),
            'name'=>$this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%language}}');
    }
}
