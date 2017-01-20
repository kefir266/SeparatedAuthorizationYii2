<?php

use yii\db\Migration;

class m170120_194724_user_details extends Migration
{
    public function up()
    {

        $this->createTable('{{%user_details}}', [
            'user_id' => "int(11) NOT NULL AUTO_INCREMENT",
            0 => 'PRIMARY KEY (`user_id`)',
            'user_name' => "varchar(200) NOT NULL",
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'avatar' => "varchar(255) DEFAULT NULL",
            'skype' => "varchar(60) NOT NULL",
            'phone' => "varchar(60) NOT NULL",
            'is_active' => "tinyint(1) NOT NULL DEFAULT '1'",
            1 => 'KEY (`is_active`)',
            'is_approved' => "tinyint(1) NOT NULL DEFAULT '0'",
            2 => 'KEY (`is_approved`)',
            'country' => "varchar(80) DEFAULT NULL",
            'city' => "varchar(80) DEFAULT NULL",
            'sex' => "tinyint(1) DEFAULT NULL",
            'birthday' => "date DEFAULT NULL",
            'about' => "text",
            'interest' => "text",
            'is_teacher' => "tinyint(1) DEFAULT NULL",
            3 => 'KEY (`is_teacher`)',
            'is_student' => "tinyint(1) DEFAULT NULL",
            4 => 'KEY (`is_student`)']);



    }

    public function down()
    {
        $this->dropTable('{{%user_details}}');

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
