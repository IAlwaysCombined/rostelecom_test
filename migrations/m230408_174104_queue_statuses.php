<?php

use yii\db\Migration;

/**
 * Class m230408_174104_queue_statuses
 */
class m230408_174104_queue_statuses extends Migration
{
    CONST TABLE_NAME = "queue_statuses";

    /**
     * {@inheritdoc}
     * Создание таблицы
     */
    public function safeUp()
    {
        $this->createTable(self::TABLE_NAME, [
            "s_name" => $this->string(512)->unique(),
            "c_name" => $this->string(512),
            "c_id" => $this->string(32),
            "a_type" => $this->string(128),
            "direction" => $this->string(32),
            "activation" => $this->string(32),
            "c_state" => $this->string(32),
            "control" => $this->string(32),
        ]);
    }

    /**
     * {@inheritdoc}
     * Удаление таблицы
     */
    public function safeDown()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
