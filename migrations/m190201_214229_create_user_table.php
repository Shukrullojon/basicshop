<?php

use yii\db\Migration;

class m190201_214229_create_user_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'first_name'=>$this->string(50)->notNull(),
            'last_name'=>$this->string(50)->notNull(),
            'phone_number'=>$this->string(20)->notNull(),
            'address'=>$this->string(100)->notNull(),
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
