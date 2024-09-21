<?php

namespace Database\Factories;

use App\Models\data_pagination;
use Illuminate\Database\Eloquent\Factories\Factory;


class data_paginationFactory extends Factory
{

    protected $model = data_pagination::class;




public function definition(): array{$birthdate = $this->faker->date('Y-m-d', '1990-01-01');

        return [
            'name' => $this->faker->firstName(),
            'middle_name' => $this->faker->lastName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->email(),
            'birth_date' => $birthdate,
            'age' => \Carbon\Carbon::parse($birthdate)->age,
            'sex' => $this->faker->randomElement(['Male', 'Female']),
            'civil_status' => $this->faker->randomElement(['Single', 'Married', 'Divorced', 'Widow'])
        ];
    }
}
