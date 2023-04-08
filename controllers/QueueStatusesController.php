<?php

namespace app\controllers;

use app\models\QueueStatuses;
use app\request\QueueStatusesRequest;
use app\service\QueueStatusesService;
use Yii;
use yii\base\InvalidConfigException;
use yii\rest\ActiveController;
use yii\web\ServerErrorHttpException;

/**
 * Контроллер для работы с очередью статусов
 */
class QueueStatusesController extends ActiveController
{
    public $modelClass = "app\models\QueueStatuses";

    private QueueStatusesService $service;

    /**
     * @param $id
     * @param $module
     * @param array $config
     * @param QueueStatusesService|null $service
     */
    public function __construct($id, $module, array $config = [], QueueStatusesService $service = null)
    {
        parent::__construct($id, $module, $config);
        $this->service = $service;
    }

    /**
     * @return array
     */
    public function actions(): array
    {
        $actions = parent::actions();

        unset(
            $actions['create'],
        );

        return $actions;
    }

    /**
     * Сохранение данных в модель
     * @throws InvalidConfigException
     * @throws ServerErrorHttpException
     */
    public function actionCreate(): QueueStatuses
    {
        $params = Yii::$app->request->getBodyParams();
        $request = new QueueStatusesRequest($params);
        return $this->service->save($request);
    }

    /**
     * @return string[][]
     */
    protected function verbs(): array
    {
        return [
            "create" => ["POST", "OPTIONS"]
        ];
    }
}