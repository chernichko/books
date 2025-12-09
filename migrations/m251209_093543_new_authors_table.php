<?php

use yii\db\Migration;

class m251209_093543_new_authors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('authors', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'birth_year' => $this->integer(),
            'country' => $this->string(),
            'created_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('authors');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m251209_093543_new_authors_table cannot be reverted.\n";

        return false;
    }
    */
}
