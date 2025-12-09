<?php

use yii\db\Migration;

class m251209_092523_new_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('books', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'author_id' => $this->integer(),
            'pages' => $this->integer(),
            'language' => $this->string(),
            'genre' => $this->string(),
            'description' => $this->text(),
            'created_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->createIndex(
            'idx-books-author_id',
            'books',
            'author_id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('books');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m251209_092523_new_books_table cannot be reverted.\n";

        return false;
    }
    */
}
