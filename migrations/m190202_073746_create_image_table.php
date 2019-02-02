<?php

use yii\db\Migration;

class m190202_073746_create_image_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%image}}', [
            'name'=>$this->integer(11)->notNull(),
            'created_at'=>$this->timestamp(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%image}}');
    }
}
