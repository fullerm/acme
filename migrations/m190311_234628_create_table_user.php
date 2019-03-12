<?php

use yii\db\Migration;

/**
 * Class m190311_234628_create_table_user
 */
class m190311_234628_create_table_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
                'id' => $this->primaryKey()->unsigned(),
                'uid' => $this->string(60)->notNull(),
                'username' => $this->string(45)->notNull(),
                'email' => $this->string(255)->unique()->notNull(),
                'password' => $this->string(60)->notNull(),
                'user_id' => $this->integer()->unsigned()->notNull(),
                'status' => $this->integer(4)->notNull()->defaultValue(0),
                'contact_email' => $this->boolean()->unsigned()->notNull()->defaultValue(0),
                'contact_phone' => $this->boolean()->unsigned()->notNull()->defaultValue(0),
                'created' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
                'updated' => $this->timestamp()->notNull()
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190311_234628_create_table_user cannot be reverted.\n";

        return false;
    }
    */
}
