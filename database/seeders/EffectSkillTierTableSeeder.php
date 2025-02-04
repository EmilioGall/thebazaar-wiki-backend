<?php

namespace Database\Seeders;

use App\Models\Effect;
use App\Models\EffectSkillTier;
use App\Models\Skill;
use App\Models\SkillTier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EffectSkillTierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $effects = Effect::all();

        $skills = config('skills');

        foreach ($skills as $skillData) {

            $skill = Skill::where('skill_name', $skillData['skill_name'])->first();

            $tiers = $skill->tiers;

            foreach ($skillData['effects'] as $effectData) {

                $effect = $effects->where('effect_description', $effectData['effect_description'])->first();

                foreach ($tiers as $tier) {

                    $skillTier = SkillTier::where('skill_id', $skill->id)->where('tier_id', $tier->id)->first();

                    if ($skillTier) {

                        $primaryValue = $this->getPrimaryValue($effectData, $tier);
                        $secondaryValue = $this->getSecondaryValue($effectData, $tier);

                        $effectskillTier = EffectSkillTier::firstOrNew([

                            'effect_id' => $effect->id,
                            'skill_tier_id' => $skillTier->id,

                        ]);

                        $effectskillTier->primary_value = $primaryValue;
                        $effectskillTier->secondary_value = $secondaryValue;

                        $effectskillTier->save();
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
