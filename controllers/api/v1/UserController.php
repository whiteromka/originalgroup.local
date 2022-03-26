<?php

namespace app\controllers\api\v1;

use app\components\actions\EmailAction;
use app\controllers\api\BaseController;
use app\models\api\v1\UserApi;

class UserController extends BaseController
{
    /** @var string[]  */
    protected $fields = ['id', 'name', 'last_name', 'email', 'birthday', 'created_at', 'updated_at'];

    /** @var string  */
    public $modelClass = UserApi::class;

    /**
     * @param string $email
     * @return \yii\web\Response
     */
    public function actionByEmail(string $email)
    {
        $user = UserApi::find()->select($this->fields)->where(['email' => $email])->asArray()->one();
        return $user ? $this->asJson($user) : $this->asJson($this->notFoundError());
    }
}