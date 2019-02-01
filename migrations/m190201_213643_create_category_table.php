<?php

use yii\db\Migration;

class m190201_213643_create_category_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(30)->notNull(),
            'icon'=>$this->string(30),
            'part'=>$this->integer(11),
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
