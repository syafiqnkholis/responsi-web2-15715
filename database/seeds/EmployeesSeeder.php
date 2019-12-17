<?php

use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 150;
        $jobs =DB::table('jobs')->pluck('id_jobs')->toArray();
        for($i = 0; $i < $limit; $i++){
            DB::table('employees')->insert([
                'id_jobs'=>$faker->randomElement($jobs),
                'name'=>$faker->name,
                'email'=>$faker->email,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
            ]);
        }
    }
}
