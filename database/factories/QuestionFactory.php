<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'title'=>rtrim($faker->sentence(rand(5,10)), "."),
        'body'=> $faker->paragraphs(rand(3,7), true), //true makes a string instead of an array
        'views'=> rand(0,10),
        'answers'=> rand(0,10),
        'votes'=> rand(-3,10) //negative for unlikes
    ];//rtrim eliminates end dot . in the sentence cause it is a title
});
