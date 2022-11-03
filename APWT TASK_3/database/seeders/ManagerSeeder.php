<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\manager::factory()->create([
            'name'=> 'Ahmed',
            'password'=> '12341234',
            'email'=> 'ahmed3@gmail.com',
            'phone'=> '12345678998',
        ],
        \App\Models\manager::factory()->create([
            'name'=> 'Sakib',
            'password'=> '12121212',
            'email'=> 'sakib75@gmail.com',
            'phone'=> '12345678997',
        ]),
        \App\Models\manager::factory()->create([
            'name'=> 'Kayes',
            'password'=> '12121212',
            'email'=> 'kayes28@gmail.com',
            'phone'=> '12345678996',
        ]),
    );
    }
}
