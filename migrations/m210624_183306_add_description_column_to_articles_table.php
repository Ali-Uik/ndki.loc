<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%articles}}`.
 */
class m210624_183306_add_description_column_to_articles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%articles}}', 'description', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%articles}}', 'description');
    }
}
