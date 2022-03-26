<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string|null $last_name
 * @property string $email
 * @property string $password
 * @property string|null $birthday
 * @property string $created_at
 * @property string|null $updated_at
 */
class User extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['name', 'email'], 'required'],
            [['birthday', 'created_at', 'updated_at'], 'safe'],
            [['name', 'last_name', 'email', 'password'], 'string', 'max' => 255],
            [['email'], 'unique']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'birthday' => 'Birthday',
            'password' => 'Password',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
