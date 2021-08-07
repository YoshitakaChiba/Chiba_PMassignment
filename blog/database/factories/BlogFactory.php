<?php

namespace Database\Factories;

use App\Models\Blog;
// use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
        $factory->define(Blog::class, function (Faker $faker){
            return [
                'title' =>$faker->word,
                'content' =>$faker->realText
            ];
        });
    }
}

