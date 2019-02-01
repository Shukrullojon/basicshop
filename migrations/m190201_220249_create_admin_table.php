<?php

use yii\db\Migration;

class m190201_220249_create_admin_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%admin}}', [
            'id' => $this->primaryKey(),
            'first_name'=>$this->string(50)->notNull(),
            'last_name'=>$this->string(50)->notNull(),
            'email'=>$this->string(50)->notNull(),
            'login'=>$this->string(50)->notNull(),
            'password'=>$this->string(100)->notNull(),
            'created_at'=>$this->timestamp(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%admin}}');
    }
}
