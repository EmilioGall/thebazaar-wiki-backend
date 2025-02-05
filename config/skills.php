<?php

return [

   // Adaptive Ordinance
   [
      'skill_name' => 'Adaptive Ordinance',
      'skill_img' => null,

      'heroes_id' => [1], // [Common]
      'min_tier_id' => 17, // Silver - Rounded

      'tiers_id' => [17, 18, 19], // [Silver, Gold, Diamond] - Rounded

      'tags_id' => [41, 18], // ['ammoReference', 'Regeneration']

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

      'tags_id' => [41, 18], // ['ammoReference', 'Regeneration']

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

      'tags_id' => [11, 40], // ['crit', 'weapon']

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

   // Alacrity
   [
      'skill_name' => 'Alacrity',
      'skill_img' => null,

      'heroes_id' => [4, 7], // [Mak, Vanessa]
      'min_tier_id' => 18, // Gold - Rounded

      'tiers_id' => [18, 19], // [Gold, Diamond] - Rounded

      'tags_id' => [2, 43], // ['charge', 'critReference']

      'effects' => [

         [
            'effect_description' => 'The first { n1 } times you Crit each fight, Charge 1 item 1 second(s).',
            'primary_value_bronze' => null,
            'primary_value_silver' => null,
            'primary_value_gold' => 5,
            'primary_value_diamond' => 10,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],

      ],

   ],

   // All Talk
   [
      'skill_name' => 'All Talk',
      'skill_img' => null,

      'heroes_id' => [1], // [Common]
      'min_tier_id' => 18, // Gold - Rounded

      'tiers_id' => [18, 19], // [Gold, Diamond] - Rounded

      'tags_id' => [44, 47], // ['damageReference', 'healthReference']

      'effects' => [

         [
            'effect_description' => 'While you have more than half Health, your weapons have +{ n1 } damage.',
            'primary_value_bronze' => null,
            'primary_value_silver' => null,
            'primary_value_gold' => 25,
            'primary_value_diamond' => 50,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],

      ],

   ],

   // Ambush
   [
      'skill_name' => 'Ambush',
      'skill_img' => null,

      'heroes_id' => [1], // [Common]
      'min_tier_id' => 18, // Gold - Rounded

      'tiers_id' => [18, 19], // [Gold, Diamond] - Rounded

      'tags_id' => [3], // ['damage']

      'effects' => [

         [
            'effect_description' => "At the start of each fight, deal damage equal to { n1 }% of the enemy's Max Health.",
            'primary_value_bronze' => null,
            'primary_value_silver' => null,
            'primary_value_gold' => 15,
            'primary_value_diamond' => 30,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],

      ],

   ],

   // Ammo Stash
   [
      'skill_name' => 'Ammo Stash',
      'skill_img' => null,

      'heroes_id' => [1], // [Common]
      'min_tier_id' => 16, // Bronze - Rounded

      'tiers_id' => [16, 17, 18, 19], // [Bronze, Silver, Gold, Diamond] - Rounded

      'tags_id' => [20], // ['ammo']

      'effects' => [

         [
            'effect_description' => "Your leftmost item with Ammo has +{ n1 } Max Ammo.",
            'primary_value_bronze' => 1,
            'primary_value_silver' => 2,
            'primary_value_gold' => 3,
            'primary_value_diamond' => 4,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],

      ],

   ],

   // Anything to Win
   [
      'skill_name' => 'Anything to Win',
      'skill_img' => null,

      'heroes_id' => [1], // [Common]
      'min_tier_id' => 17, // Silver - Rounded

      'tiers_id' => [17, 18, 19], // [Silver, Gold, Diamond] - Rounded

      'tags_id' => [1, 31, 7], // ['burn', 'nonWeapon', 'poison']

      'effects' => [

         [
            'effect_description' => "When you use a non-weapon item, Burn { n1 } and Poison { n2 }.",
            'primary_value_bronze' => null,
            'primary_value_silver' => 1,
            'primary_value_gold' => 2,
            'primary_value_diamond' => 3,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => 1,
            'secondary_value_gold' => 2,
            'secondary_value_diamond' => 3,
            'secondary_value_legendary' => null,
         ],

      ],

   ],

   // Arbitrage
   [
      'skill_name' => 'Arbitrage',
      'skill_img' => null,

      'heroes_id' => [5, 6, 7], // [Pygmalien, Stelle, Vanessa]
      'min_tier_id' => 16, // Bronze - Rounded

      'tiers_id' => [16, 17, 18, 19], // [Bronze, Silver, Gold, Diamond] - Rounded

      'tags_id' => [13], // ['gold']

      'effects' => [

         [
            'effect_description' => "When you win a fight against a player, gain { n1 } gold.",
            'primary_value_bronze' => 2,
            'primary_value_silver' => 3,
            'primary_value_gold' => 4,
            'primary_value_diamond' => 5,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],

      ],

   ],

   // Arms Dealer
   [
      'skill_name' => 'Arms Dealer',
      'skill_img' => null,

      'heroes_id' => [5, 7], // [Pygmalien, Vanessa]
      'min_tier_id' => 16, // Bronze - Rounded

      'tiers_id' => [16, 17, 18, 19], // [Bronze, Silver, Gold, Diamond] - Rounded

      'tags_id' => [14, 40], // ['health', 'weapon']

      'effects' => [

         [
            'effect_description' => "When you buy a Weapon, gain { n1 } Max Health.",
            'primary_value_bronze' => 20,
            'primary_value_silver' => 30,
            'primary_value_gold' => 40,
            'primary_value_diamond' => 50,
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
