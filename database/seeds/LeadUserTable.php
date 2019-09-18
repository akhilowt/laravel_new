<?php

use Illuminate\Database\Seeder;
//use Faker\Factory as Faker;
use Faker\Generator as Faker;

class LeadUserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1,50) as $index) {
            DB::table('leaduser')->insert([
                'name'=>$faker->firstNameMale,
                'contact'=>$faker->phoneNumber,
                'email'=>$faker->unique()->email
            ]);
        }
    }
}
