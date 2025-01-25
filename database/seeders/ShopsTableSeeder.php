<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shop;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        for ($i=0; $i < 10; $i++) { 

            $newShopDay = new Shop();

            $newShopDay->shop_day = $i+1;

            $newShopDay->save();

        }
    }
}
