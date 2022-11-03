<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\employee::factory()->create([
            'name'=> 'karim',
            'id'=> '9',
            'email'=> 'karim6@gmail.com',
            'phone'=> '12345678909',
            'managedBy'=>'1'
        ],
        \App\Models\employee::factory()->create([
            'name'=> 'Casemero',
            'id'=> '14',
            'email'=> 'casemero14@gmail.com',
            'phone'=> '12345678914',
            'managedBy'=>'1'
        ]),
        \App\Models\employee::factory()->create([
            'name'=> 'Ronaldo',
            'id'=> '7',
            'email'=> 'ronaldo07@gmail.com',
            'phone'=> '12345678907',
            'managedBy'=>'1'
        ]),
        \App\Models\employee::factory()->create([
            'name'=> 'Kroos',
            'id'=> '8',
            'email'=> 'kroos08@gmail.com',
            'phone'=> '12345678908',
            'managedBy'=>'2'
        ]),
        \App\Models\employee::factory()->create([
            'name'=> 'Messi',
            'id'=> '10',
            'email'=> 'messi@gmail.com',
            'phone'=> '12345678910',
            'managedBy'=>'2'
        ]),
    );
    }
}
