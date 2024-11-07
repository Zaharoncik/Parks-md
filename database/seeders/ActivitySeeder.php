<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activity::create([
            'name'=>'Velopark'
        ]);

        Activity::create([
            'name'=>'Volleyball'
        ]);  

        Activity::create([
            'name'=>'Football'
        ]);  

        Activity::create([
            'name'=>'Basketball'
        ]);

        Activity::create([
            'name'=>'Tenis'
        ]);  

        Activity::create([
            'name'=>'BadminTon'
        ]);  

        Activity::create([
            'name'=>'Beach'
        ]);  

        Activity::create([
            'name'=>'Skatepark'
        ]);  

        Activity::create([
            'name'=>'Workout zone'
        ]);  
    }
}
