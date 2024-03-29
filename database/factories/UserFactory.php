<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'surname' => $this->faker->word,
            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'password' => $this->faker->password,
            'created_at' => $this->faker->dateTime(),
            'updated' => $this->faker->dateTime(),
            'email_verified_at' => $this->faker->word,
            'remember_token' => $this->faker->word,
            'role' => "market",
        ];
    }
}
