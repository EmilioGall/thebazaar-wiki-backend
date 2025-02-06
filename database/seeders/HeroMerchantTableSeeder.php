<?php

namespace Database\Seeders;

use App\Models\Hero;
use App\Models\Merchant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroMerchantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $merchants = config('merchants');

        foreach ($merchants as $merchant) {

            $existingmerchant = Merchant::where('merchant_name', $merchant['merchant_name'])->first();

            if ($existingmerchant && isset($merchant['heroes_id'])) {

                foreach ($merchant['heroes_id'] as $heroId) {

                    $existingHero = Hero::find($heroId);

                    if ($existingHero) {

                        $exists = DB::table('hero_merchant')->where([

                            'merchant_id' => $existingmerchant->id,
                            'hero_id' => $existingHero->id,

                        ])->exists();

                        if (!$exists) {

                            DB::table('hero_merchant')->insert([

                                'merchant_id' => $existingmerchant->id,
                                'hero_id' => $existingHero->id,

                            ]);
                        }
                    }
                }
            }
        }
    }
}
