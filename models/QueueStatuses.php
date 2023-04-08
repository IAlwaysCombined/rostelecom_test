<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Таблица для хранения queue_statuses
 * @property string $s_name
 * @property string $c_name
 * @property string $c_id
 * @property string $a_type
 * @property string $direction
 * @property string $activation
 * @property string $c_state
 * @property string $control
 */
class QueueStatuses extends ActiveRecord
{

    CONST tableName = "queue_statuses";

    /**
     * Связь с таблицей в базе данных
     * @return string
     */
    public static function tableName(): string
    {
        return self::tableName;
    }

    /**
     * Описываем ограничения полей
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [[
                "s_name",
                "c_name",
                "c_id",
                "a_type",
                "direction",
                "activation",
                "c_state",
                "control"
            ], "string"]
        ];
    }

    /**
     * Аттрибуты данной модели
     * @return string[]
     */
    public function attributes(): array
    {
        return [
            "s_name",
            "c_name",
            "c_id",
            "a_type",
            "direction",
            "activation",
            "c_state",
            "control"
        ];
    }
}