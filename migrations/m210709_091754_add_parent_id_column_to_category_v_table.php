<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%category_v}}`.
 */
class m210709_091754_add_parent_id_column_to_category_v_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%category_v}}', 'parent_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%category_v}}', 'parent_id');
    }
}
