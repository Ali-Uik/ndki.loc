<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%category}}`.
 */
class m210616_182751_drop_parent_id_column_from_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%category}}', 'parent_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('{{%category}}', 'parent_id', $this->integer());
    }
}
