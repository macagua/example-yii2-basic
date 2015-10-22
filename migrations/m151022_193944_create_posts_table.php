<?php

use yii\db\Schema;
use yii\db\Migration;

class m151022_193944_create_posts_table extends Migration
{
    public function up()
    {
        $this->createTable('posts', [
            "id" => $this->primaryKey(),
            "title" => $this->string()->notNull(),
            "content" => $this->text()->notNull()
        ]);
    }

    public function down()
    {
        $this->dropTable('posts');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
