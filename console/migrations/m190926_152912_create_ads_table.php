<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ads}}`.
 */
class m190926_152912_create_ads_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ads}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'city' => $this->string(),
            'cost' => $this->integer(),
            'date_time' => $this->date(),
            'categories' => $this->string(),
            'status' => $this->string(),
            'fk' => $this->integer(),
        ]);
        $this->addForeignKey(
		    'FK_organization_id',  // это "условное имя" ключа
		    'ads', // это название текущей таблицы
		    'fk', // это имя поля в текущей таблице, которое будет ключом
		    'users', // это имя таблицы, с которой хотим связаться
		    'id', // это поле таблицы, с которым хотим связаться
		    'CASCADE', // что делать при удалении сущности, на которую ссылаемся
		    'CASCADE'  // что делать при обновлении сущности, на которую ссылаемся
		);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ads}}');
    }
}
