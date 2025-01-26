<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Day;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        for ($i=0; $i < 10; $i++) { 

            $newDay = new Day();

            $newDay->day_number = $i+1;

            $newDay->save();

        }
    }
}
