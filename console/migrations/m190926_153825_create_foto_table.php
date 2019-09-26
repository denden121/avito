<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%foto}}`.
 */
class m190926_153825_create_foto_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%foto}}', [
            'id' => $this->primaryKey(),
            'date_time' => $this->date(),
            'way' => $this->string(),
            'fk' => $this->integer(),
        ]);
        $this->addForeignKey(
            'FK_organization_id',  // это "условное имя" ключа
            'foto', // это название текущей таблицы
            'fk', // это имя поля в текущей таблице, которое будет ключом
            'ads', // это имя таблицы, с которой хотим связаться
            'id', // это поле таблицы, с которым хотим связаться
            'CASCADE', // что делать при удалении сущности, на которую ссылаемся
            'CASCADE'   // что делать при обновлении сущности, на которую ссылаемся
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%foto}}');
    }
}
