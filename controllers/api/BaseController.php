<?php

namespace app\controllers\api;

use Yii;
use yii\rest\ActiveController;

class BaseController extends ActiveController
{
    /**
     * @param string $id
     * @param array $params
     * @return mixed|\yii\web\Response|null
     * @throws \yii\base\InvalidRouteException
     */
    public function runAction($id, $params = [])
    {
        if ($this->isEvenSecond()) {
            return $this->asJson($this->isEvenSecondError());
        }
        return parent::runAction($id, $params);
    }

    /**
     * @return bool
     */
    protected function isEvenSecond(): bool
    {
        return (time() % 2 === 0);
    }

    /**
     * @return array
     */
    protected function notFoundError(): array
    {
        $message = 'Not Found';
        Yii::error($message);
        Yii::$app->response->statusCode = 404;
        return [
            'name' => $message,
            'message' => $message,
            'code' => 0,
            'status' => 404,
            'type' => 'yii\web\NotFoundHttpException'
        ];
    }

    /**
     * @return array
     */
    protected function isEvenSecondError(): array
    {
        $message = 'Even second error';
        Yii::error($message);
        Yii::$app->response->statusCode = 400;
        return [
            'name' => $message,
            'message' => $message,
            'code' => 0,
            'status' => 400,
            'type' => 'yii\web\BadRequestHttpException'
        ];
    }
}