<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Effect;
use App\Models\Item;
use App\Models\ItemTier;
use App\Models\EffectItemTier;

class EffectItemTierTableSeeder extends Seeder
{
    public function run()
    {

        $effects = Effect::all();

        $items = config('items');

        foreach ($items as $itemData) {

            $item = Item::where('item_name', $itemData['item_name'])->first();

            $tiers = $item->tiers;

            foreach ($itemData['effects'] as $effectData) {

                $effect = $effects->where('effect_description', $effectData['effect_description'])->first();

                foreach ($tiers as $tier) {

                    $itemTier = ItemTier::where('item_id', $item->id)->where('tier_id', $tier->id)->first();

                    if ($itemTier) {

                        $primaryValue = $this->getPrimaryValue($effectData, $tier);
                        $secondaryValue = $this->getSecondaryValue($effectData, $tier);

                        $effectItemTier = EffectItemTier::firstOrNew([

                            'effect_id' => $effect->id,
                            'item_tier_id' => $itemTier->id,

                        ]);

                        $effectItemTier->primary_value = $primaryValue;
                        $effectItemTier->secondary_value = $secondaryValue;

                        $effectItemTier->save();
                    }
                }
            }
        }
    }

    private function getPrimaryValue($effect, $tier)
    {
        switch ($tier->tier_label) {
            case 'bronze':
                return $effect['primary_value_bronze'];
            case 'silver':
                return $effect['primary_value_silver'];
            case 'gold':
                return $effect['primary_value_gold'];
            case 'diamond':
                return $effect['primary_value_diamond'];
            default:
                return null;
        }
    }

    private function getSecondaryValue($effect, $tier)
    {
        switch ($tier->tier_label) {
            case 'bronze':
                return $effect['secondary_value_bronze'];
            case 'silver':
                return $effect['secondary_value_silver'];
            case 'gold':
                return $effect['secondary_value_gold'];
            case 'diamond':
                return $effect['secondary_value_diamond'];
            default:
                return null;
        }
    }
}
