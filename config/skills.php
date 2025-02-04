<?php

return [

   // Adaptive Ordinance
   [
      'skill_name' => 'Adaptive Ordinance',
      'skill_img' => null,

      'heroes_id' => [1], // [Common]
      'min_tier_id' => 17, // Silver - Rounded

      'tiers_id' => [17, 18, 19], // [Silver, Gold, Diamond] - Rounded

      'tags_id' => [40, 18], // ['ammoReference', 'Regeneration']

      'effects' => [

         [
            'effect_description' => 'You have { n1 } Regeneration for each item with Ammo you have.',
            'primary_value_bronze' => null,
            'primary_value_silver' => 2,
            'primary_value_gold' => 4,
            'primary_value_diamond' => 6,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],

      ],

   ],

   // Advanced Synthetics
   [
      'skill_name' => 'Advanced Synthetics',
      'skill_img' => null,

      'heroes_id' => [2, 6], // [Dooley, Stelle]
      'min_tier_id' => 18, // Gold - Rounded

      'tiers_id' => [18, 19], // [Gold, Diamond] - Rounded

      'tags_id' => [40, 18], // ['ammoReference', 'Regeneration']

      'effects' => [

         [
            'effect_description' => 'When you Level Up, upgrade a { Tier } item.',
            'primary_value_bronze' => null,
            'primary_value_silver' => null,
            'primary_value_gold' => 21,
            'primary_value_diamond' => 22,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],

      ],

   ],

   // Aggressive
   [
      'skill_name' => 'Aggressive',
      'skill_img' => null,

      'heroes_id' => [1], // [Common]
      'min_tier_id' => 16, // Bronze - Rounded

      'tiers_id' => [16, 17, 18, 19], // [Bronze, Silver, Gold, Diamond] - Rounded

      'tags_id' => [11, 39], // ['crit', 'weapon']

      'effects' => [

         [
            'effect_description' => 'When you use a Weapon, give it +{ n1 }% Crit Chance for the fight.',
            'primary_value_bronze' => 2,
            'primary_value_silver' => 4,
            'primary_value_gold' => 6,
            'primary_value_diamond' => 8,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],

      ],

   ],

];
