<?php

use yii\db\Migration;

class m190201_215157_create_product_pagination_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%product_pagination}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(50)->notNull(),
            'image'=>$this->string(100)->notNull(),
            'category_id'=>$this->integer()->notNull(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%product_pagination}}');
    }
}
