<?php

namespace Database\Factories;

use App\Enums\AppointmentStatusEnum;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Time_doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => Customer::query()->inRandomOrder()->value('id'),
            'time_doctor_id' => Time_doctor::query()->inRandomOrder()->value('id'),
            'admin_id' => Admin::query()->inRandomOrder()->value('id'),
            'comment'=>$this->faker->word(),
            'description'=>$this->faker->word(),
            'feedback'=>$this->faker->word(),
            'price'=>$this->faker->numberBetween($min = 1500, $max = 6000),
            'status'=>$this->faker->randomElement(AppointmentStatusEnum::getValues()),
        ];
    }
}
