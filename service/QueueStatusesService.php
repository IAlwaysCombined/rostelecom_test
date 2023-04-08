<?php

namespace app\service;

use app\interfaces\ISave;
use app\models\QueueStatuses;
use app\request\QueueStatusesRequest;
use yii\web\ServerErrorHttpException;

/**
 * Сервис для работы с моделью QueueStatuses
 */
class QueueStatusesService implements ISave
{
    /** @var QueueStatuses $model */
    private QueueStatuses $model;

    public function __construct(QueueStatuses $model)
    {
        $this->model = $model;
    }

    /**
     * Сохранение данных в модель
     * @throws ServerErrorHttpException
     */
    public function save(QueueStatusesRequest $request): QueueStatuses
    {
        $this->model->setAttributes((array)$request);
        if ($this->model->save()) {
            return $this->model;
        } else {
            throw new ServerErrorHttpException("Данные не были сохранены");
        }
    }
}