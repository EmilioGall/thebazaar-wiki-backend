<?php

namespace Database\Seeders;

use App\Models\Merchant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MerchantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $merchants = config('merchants');

        foreach ($merchants as $merchant) {

            Merchant::create([

                'tier_id' => $merchant['tier_id'],
                'merchant_name' => $merchant['merchant_name'],
                'merchant_img' => $merchant['merchant_img'],
                'merchant_day' => $merchant['merchant_day'],
                'merchant_reroll_cost' => $merchant['merchant_reroll_cost'],
                'merchant_type' => $merchant['merchant_type'],
                'merchant_description' => $merchant['merchant_description'],
                'created_at' => now(),
                'updated_at' => now(),

            ]);

        }
    }
}
