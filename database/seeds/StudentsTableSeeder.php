<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('students')->insert([
            'classId' => 1,
            'firstname' => str_random(10),
            'lastname' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'street' => str_random(10),
            'plz' => random_int(1000, 9999),
            'city' => str_random(10),
        ]);
    }
}
