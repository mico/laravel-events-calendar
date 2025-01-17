<?php

use Faker\Generator as Faker;
use DavideCasiraghi\LaravelEventsCalendar\Models\Teacher;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Teacher::class, function (Faker $faker) {
    $teacher_name = $faker->name;
    $slug = Str::slug($teacher_name, '-').rand(10000, 100000);
    $year_starting_practice = $faker->numberBetween($min = 1972, $max = 2018);
    $year_starting_teach = $faker->numberBetween($min = $year_starting_practice, $max = 2018);

    return [
        'name' => $teacher_name,
        'bio' => $faker->paragraph,
        'year_starting_practice' => $year_starting_practice,
        'year_starting_teach' => $year_starting_teach,
        'significant_teachers' => $faker->paragraph,
        //'profile_picture' => Str::random(10).".jpg",  //this can cause an error in the tests
        'website' => $faker->url,
        'facebook' => 'https://www.facebook.com/'.$faker->word,
        'created_by' => '1',
        'slug' => $slug,
        'country_id' => $faker->numberBetween($min = 1, $max = 253),
    ];
});
