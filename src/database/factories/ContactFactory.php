<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name'=>$this->faker->lastName,
            'first_name'=>$this->faker->firstName,
            'gender'=>$this->faker->randomElement(['male','female']),
            'email'=>$this->faker->unique()->safeEmail,
            'tel'=>$this->faker->phoneNumber,
            'address'=>$this->faker->address(),
            'building'=>$this->faker->secondaryAddress,
            'category'=>$this->faker->randomElement([1,2,3,4,5]),
            'detail'=>$this->faker->paragraph
        ];
    }
}
