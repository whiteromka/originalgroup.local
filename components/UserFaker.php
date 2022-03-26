<?php

namespace app\components;

use app\models\User;
use Faker\Factory;

class UserFaker
{
    /** @var \Faker\Generator */
    protected $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    /**
     * @return bool
     */
    public function create(): bool
    {
        $user = new User();
        $user->name = $this->faker->firstName;
        $user->last_name = $this->faker->lastName;
        $user->email = $this->faker->unique()->email;
        $user->password = $this->faker->password;

        $unixTimeFrom = 315532800; // 01.01.1980
        $unixTime = $this->faker->numberBetween($unixTimeFrom, time());
        $date = date("Y-m-d", $unixTime);
        $user->birthday = $date;
        return $user->save();
    }

}