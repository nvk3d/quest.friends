<?php

use yii\db\Migration;

class m170514_123545_init extends Migration
{
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(11),
            'type' => $this->smallInteger(2),
            'login' => 'VARCHAR(50)',
            'password_hash' => 'VARCHAR(255)',
            'name' => 'VARCHAR(100)',
            'email' => 'VARCHAR(100)'
        ]);

        $this->createTable('quest', [
            'id' => $this->primaryKey(11),
            'title' => 'VARCHAR(255)',
            'img' => $this->integer(11)->notNull(),
            'description' => $this->text(),
            'price' => $this->integer(11),
            'likes' => $this->integer(11)
        ]);

        $this->createTable('img', [
            'id' => $this->primaryKey(11),
            'path' => 'VARCHAR(1000)'
        ]);

        $this->createTable('comment', [
            'id_quest' => $this->integer(11),
            'value' => $this->text()
        ]);

        $this->createTable('log', [
            'id' => $this->bigPrimaryKey(20),
            'ip' => 'VARCHAR(100)',
            'page' => $this->integer(11),
            'oper' => $this->integer(11),
            'ua' => $this->integer(11),
            'date_created' => $this->timestamp()->null()
        ]);

        $this->createTable('log_url', [
            'id' => $this->primaryKey(11),
            'value' => 'VARCHAR(500)'
        ]);

        $this->createTable('log_oper', [
            'id' => $this->primaryKey(11),
            'value' => 'VARCHAR(100)'
        ]);

        $this->createTable('log_ua', [
            'id' => $this->primaryKey(11),
            'value' => 'VARCHAR(1000)'
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('users');
        $this->dropTable('quest');
        $this->dropTable('img');
        $this->dropTable('comment');
        $this->dropTable('log');
        $this->dropTable('log_oper');
        $this->dropTable('log_ua');
        $this->dropTable('log_page');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170514_123545_init cannot be reverted.\n";

        return false;
    }
    */
}
