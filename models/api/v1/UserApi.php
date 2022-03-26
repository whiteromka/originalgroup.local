<?php

namespace app\models\api\v1;

use app\models\User;

class UserApi extends User
{
    /**
     * @return array
     */
    public function fields(): array
    {
        $fields = parent::fields();
        unset($fields['password']);
        return $fields;
    }
}
