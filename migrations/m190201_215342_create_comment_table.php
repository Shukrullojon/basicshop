<?php

use yii\db\Migration;

class m190201_215342_create_comment_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%comment}}', [
            'id' => $this->primaryKey(),
            'user_id'=>$this->integer(11),
            'product_id'=>$this->integer(11),
            'description'=>$this->text(),
            'created_at'=>$this->timestamp(),
            'status'=>$this->integer(1),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%comment}}');
    }
}
