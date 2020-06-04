<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    $jobTitles = [
        'Frontend Developer', 
        'Backend Developer', 
        'Digital Marketer', 
        'UI UX', 
        'Database Administrator'];
        $work_type = ['Full time', 'Part time', 'Internship', 'Contract'];
        $status = ['Worker', 'Test Period'];
    return [
        'name' => $faker->name,
        'job_title' => $jobTitles[rand(0, 4)],
        'salary' => rand(50000, 200000),
        'work_type' => $work_type[rand(0, 3)],
        'status' => $status[rand(0, 1)]
    ];
});
