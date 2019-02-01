<?php

use yii\db\Migration;

class m190201_214842_create_order_item_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%order_item}}', [
            'id' => $this->primaryKey(),
            'order_id'=>$this->integer(11)->notNull(),
            'product_id'=>$this->integer(11)->notNull(),
            'count'=>$this->float(10)->notNull(),
            'price'=>$this->float(10)->notNull(),
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('{{%order_item}}');
    }
}
