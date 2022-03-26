<?php

use app\components\UserFaker;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m220324_171811_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'last_name' => $this->string(),
            'email' => $this->string()->unique()->notNull(),
            'password' => $this->string()->notNull(),
            'birthday' => $this->timestamp(),
            'created_at' => 'TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()',
            'updated_at' => 'TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP()',
        ]);

        $this->createUsers();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }

    /**
     * Create 100 random users
     */
    protected function createUsers()
    {
        echo PHP_EOL . 'Generating  users. Plz wait a minute' . PHP_EOL;
        $userFaker = new UserFaker();
        $successCount = 0;
        for ($i = 0; $i < 100 ;$i++) {
            if ($userFaker->create()) {
                echo '.';
                $successCount++;
            }
        }
        echo PHP_EOL . 'Done! ' . $successCount . ' users created.' . PHP_EOL;
    }
}
