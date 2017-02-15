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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

// Page
$factory->define(App\Page::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(6, true),
        'content' => $faker->paragraph(3, true),
        'url' => $faker->sentence(1, true),
    ];
});

// PageType
$factory->define(App\PageType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence(1, true),
    ];
});

// Feedback
$factory->define(App\Feedback::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(3, true),
        'content' => $faker->paragraph(3, true),
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
    ];
});

// Image
$factory->define(App\Image::class, function (Faker\Generator $faker) {
    return [
        'url' => $faker->sentence(1, true),
        'alt' => $faker->sentence(3, true),
    ];
});

// PortfolioWork
$factory->define(App\PortfolioWork::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(3, true),
        'description' => $faker->sentence(rand(3,7), true),
    ];
});

// Review
$factory->define(App\Review::class, function (Faker\Generator $faker) {
    return [
        'content' => $faker->paragraph(3, true),
    ];
});

// PortfolioCategory
$factory->define(App\PortfolioCategory::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence(1, true),
    ];
});

// Tag
$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence(rand(2,4), true),
        'icon' => $faker->sentence(1, true),
    ];
});

// News
$factory->define(App\News::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(3, true),
        'content' => $faker->paragraph(3, true),
    ];
});