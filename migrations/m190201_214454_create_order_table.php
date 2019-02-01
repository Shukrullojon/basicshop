<?php

use yii\db\Migration;

class m190201_214454_create_order_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'order_date'=>$this->timestamp()->notNull(),
            'client_id'=>$this->integer(11)->notNull(),
            'check_code'=>$this->integer(11)->notNull(),
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('{{%order}}');
    }
}
