<?php

use yii\db\Migration;

class m190201_215738_create_product_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(100)->notNull(),
            'price'=>$this->float()->notNull(),
            'price_last'=>$this->float(),
            'price_percent'=>$this->float(),
            'together'=>$this->float(),
            'title'=>$this->string(255)->notNull(),
            'description'=>$this->text()->notNull(),
            'image'=>$this->string(255)->notNull(),
            'category_id'=>$this->string(11)->notNull(),
            'like'=>$this->integer(11),
            'count_view'=>$this->integer(11),
            'number'=>$this->integer(11)->notNull(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}
