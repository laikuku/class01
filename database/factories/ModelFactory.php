<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
/*
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
*/

$faker=\Faker\Factory::create('zh_TW');
$factory->define(App\Home_model::class, function (Faker\Generator $faker) {
    return [
        'ARRAYname'=> $faker->name,
        'CLASSROOMname'=> $faker->regexify('教室[0-9]{1}'),
        'SCHEDULEyear'=>'2017',
        'SCHEDULEmonth'=>$faker->numberBetween(1,12),
        'BORROWer'=>$faker->numberBetween(1,28),
        'CELLphone'=>$faker->phoneNumber(),
        'PURPOSE'=>'1',
        'application'=>'1998-05-02 01:23:56.123',
        'key_status'=>'0'
    ];
});
