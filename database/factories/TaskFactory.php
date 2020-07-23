<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use App\Project;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'project_id' => factory(Project::class),
        'title' => $faker->sentence,
        'status' => $faker->sentence,
        'description' => $faker->text(200),
        'files' => $faker->text,
    ];
});
