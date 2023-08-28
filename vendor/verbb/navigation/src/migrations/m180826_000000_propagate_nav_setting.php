<?php
namespace verbb\navigation\migrations;

use craft\db\Migration;

class m180826_000000_propagate_nav_setting extends Migration
{
    public function safeUp()
    {
        if (!$this->db->columnExists('{{%navigation_navs}}', 'propagateNodes')) {
            $this->addColumn('{{%navigation_navs}}', 'propagateNodes', $this->boolean()->after('sortOrder')->notNull()->defaultValue(false));
        }

        return true;
    }

    public function safeDown()
    {
        echo "m180826_000000_propagate_nav_setting cannot be reverted.\n";

        return false;
    }
}
