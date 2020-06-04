<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' =>$faker->name,
        'job_title' => $faker->words(2, true),
        'salary' => 10000000,
        'work_type' => 'fulltime',
        'status' => 'test period'
    ];
});
