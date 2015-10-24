<?php

use yii\db\Schema;
use yii\db\Migration;

class m151022_193944_create_posts_table extends Migration
{
    public function up()
    {
        // MySql table options
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('posts', [
            "id" => $this->primaryKey(),
            "title" => $this->string()->notNull(),
            "content" => $this->text()->notNull()
        ], $tableOptions);

        // Data for table 'posts'
        $this->insert("posts", array(
            "id"=>"1",
            "title"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
            "content"=>'Suspendisse ac vulputate magna, vel consectetur eros. Nulla porta leo vel tincidunt eleifend. Nulla ac consectetur dui. Praesent ut tellus sodales, iaculis quam et, fringilla nisl. Nulla eget egestas orci. Mauris consectetur ex sit amet lacus tempor, sagittis facilisis magna viverra. Curabitur non urna ac nibh tristique facilisis. Mauris euismod elit id lacus congue luctus. Nunc sagittis dolor metus, sit amet gravida mi sagittis sit amet. Duis sit amet porttitor tellus. Morbi elementum quam sem, in facilisis ex pharetra vel.',
        ) );
        $this->insert("posts", array(
            "id"=>"2",
            "title"=>"Morbi egestas est mauris, at maximus elit fringilla nec.",
            "content"=>"Maecenas mollis facilisis urna, et facilisis tellus laoreet vel. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus feugiat metus et sodales consequat. Sed risus nulla, consectetur eget facilisis a, suscipit nec ex. Donec eu tristique sapien. Vivamus tincidunt magna ante, ac pretium dolor pretium nec. Nulla mollis erat neque. Vestibulum pulvinar magna sed vestibulum imperdiet. Morbi vel orci maximus, blandit diam a, pretium turpis. Morbi ut molestie ligula, ut viverra nibh. Morbi laoreet eros tempus elementum volutpat. Cras lobortis maximus nulla id ultrices.",
        ) );
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
