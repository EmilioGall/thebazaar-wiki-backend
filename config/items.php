<?php

return [

   // Abacus
   [
      'item_name' => 'Abacus',
      'item_img' => null,
      'item_state' => true,
      'item_cooldown' => 4,
      'item_max_ammo' => null,
      'item_multicast' => null,

      'hero_id' => 5, // Pygmalien
      'min_tier_id' => 3, // Gold - Small

      'tiers_id' => [3, 4], // [Gold, Diamond] - Small

      'tags_id' => [8, 26, 35], // ['shield', 'economy', 'tool']

      'effects' => [

         [
            'effect_description' => '{ Shield } equal to { n1 }x the value of the adjacent items.',
            'primary_value_bronze' => null,
            'primary_value_silver' => null,
            'primary_value_gold' => 1,
            'primary_value_diamond' => 2,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],

      ],

      'enchantments' => [

         'deadly' => '+50% { Crit } Chance',
         'fiery' => '{ Burn } 3.',
         'golden' => 'Adjacent items have +50% { Value }.',
         'heavy' => '{ Slow } 1 item for 1 second(s).',
         'icy' => '{ Freeze } 1 item for 1 second(s).',
         'obsidian' => null,
         'restorative' => "{ Heal } equal to the { Value } of adjacent items.",
         'shielded' => "This has double { Shield }.",
         'shiny' => 'This has +1 { Multicast }.',
         'toxic' => '{ Poison } 2.',
         'turbo' => '{ Haste } 1 item for 1 second(s).',
      ]

   ],

   // Agility Boots
   [
      'item_name' => 'Agility Boots',
      'item_img' => null,
      'item_state' => false,
      'item_cooldown' => null,
      'item_max_ammo' => null,
      'item_multicast' => null,

      'hero_id' => 1, // Common
      'min_tier_id' => 1, // Bronze - Small

      'tiers_id' => [1, 2, 3, 4], // [Bronze, Silver, Gold, Diamond] - Small

      'tags_id' => [11], // ['crit']

      'effects' => [

         [
            'effect_description' => 'Adjacent items have +{ n1 }% { Crit } chance.',
            'primary_value_bronze' => 3,
            'primary_value_silver' => 6,
            'primary_value_gold' => 9,
            'primary_value_diamond' => 12,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],
         [
            'effect_description' => 'When you sell this, your items gain +{ n1 }% { Crit } chance.',
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

      'enchantments' => [

         'deadly' => null,
         'fiery' => null,
         'golden' => null,
         'heavy' => null,
         'icy' => null,
         'obsidian' => null,
         'restorative' => null,
         'shielded' => null,
         'shiny' => 'This gives double + { Crit } Chance.',
         'toxic' => null,
         'turbo' => null,

      ]

   ],

   // Alpha Ray
   [
      'item_name' => 'Alpha Ray',
      'item_img' => null,
      'item_state' => true,
      'item_cooldown' => 5,
      'item_max_ammo' => null,
      'item_multicast' => null,

      'hero_id' => 2, // Dooley
      'min_tier_id' => 1, // Bronze - Small

      'tiers_id' => [1, 2, 3, 4], // [Bronze, Silver, Gold, Diamond] - Small

      'tags_id' => [3, 33, 39], // ['damage', 'ray', 'weapon']

      'effects' => [

         [
            'effect_description' => 'Deal { n1 } { Damage }.',
            'primary_value_bronze' => 5,
            'primary_value_silver' => 10,
            'primary_value_gold' => 20,
            'primary_value_diamond' => 40,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],
         [
            'effect_description' => 'When you use the Core or another Ray, your Weapons gain { n1 } { Damage } for the fight.',
            'primary_value_bronze' => 3,
            'primary_value_silver' => 6,
            'primary_value_gold' => 9,
            'primary_value_diamond' => 12,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],

      ],

      'enchantments' => [

         'deadly' => '+50% { Crit } Chance',
         'fiery' => '{ Burn } 4.',
         'golden' => null,
         'heavy' => '{ Slow } 1 item for 1 second(s).',
         'icy' => '{ Freeze } 1 item for 1 second(s).',
         'obsidian' => 'This has { Lifesteal }.',
         'restorative' => "{ Heal } equal to this item's { Damage }.",
         'shielded' => "{ Shield } equal to this item's { Damage }.",
         'shiny' => 'This has +1 { Multicast }.',
         'toxic' => '{ Poison } 2.',
         'turbo' => '{ Haste } 1 item for 1 second(s).',

      ],

   ],

   // Amber
   [
      'item_name' => 'Amber',
      'item_img' => null,
      'item_state' => true,
      'item_cooldown' => 5,
      'item_max_ammo' => null,
      'item_multicast' => null,

      'hero_id' => 4, // Mak
      'min_tier_id' => 2, // Silver - Small

      'tiers_id' => [2, 3, 4], // [Silver, Gold, Diamond] - Small

      'tags_id' => [9], // ['slow']

      'effects' => [

         [
            'effect_description' => '{ Slow } { n1 } items for 3 second(s).',
            'primary_value_bronze' => null,
            'primary_value_silver' => 1,
            'primary_value_gold' => 2,
            'primary_value_diamond' => 3,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],
         [
            'effect_description' => 'Your other { Slow } items have +1 { Slow }.',
            'primary_value_bronze' => null,
            'primary_value_silver' => null,
            'primary_value_gold' => null,
            'primary_value_diamond' => null,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],

      ],

      'enchantments' => [

         'deadly' => null,
         'fiery' => '{ Burn } 4.',
         'golden' => null,
         'heavy' => 'This has double { Slow } duration.',
         'icy' => '{ Freeze } 1 item for 1 second(s).',
         'obsidian' => null,
         'restorative' => '{ Heal } 40.',
         'shielded' => '{ Shield } 25.',
         'shiny' => 'This has +1 { Multicast }.',
         'toxic' => '{ Poison } 2.',
         'turbo' => '{ Haste } 1 item for 1 second(s).',

      ],

   ],

   // Ambergris 
   [
      'item_name' => 'Ambergris',
      'item_img' => null,
      'item_state' => true,
      'item_cooldown' => 6,
      'item_max_ammo' => null,
      'item_multicast' => null,

      'hero_id' => 7, // Vanessa
      'min_tier_id' => 1, // Bronze - Small

      'tiers_id' => [1, 2, 3, 4], // [Bronze, Silver, Gold, Diamond] - Small

      'tags_id' => [22, 26, 6, 19], // ['aquatic', 'economy', 'heal', 'value']

      'effects' => [

         [
            'effect_description' => "{ Heal } equal to { n1 }x this item's { Value }.",
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
         [
            'effect_description' => 'When you buy another Aquatic item, this gains { n1 } { Value }.',
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

      'enchantments' => [

         'deadly' => '+50% { Crit } Chance',
         'fiery' =>  "{ Burn } equal to this item's { Value }.",
         'golden' => 'Double { Value }',
         'heavy' => '{ Slow } 1 item for 1 second(s).',
         'icy' => '{ Freeze } 1 item for 1 second(s).',
         'obsidian' => null,
         'restorative' => 'This has double { Heal }.',
         'shielded' => "{ Shield } equal to this item's { Heal }.",
         'shiny' => 'This has +1 Multicast.',
         'toxic' => "{ Poison } equal to this item's { Value }.",
         'turbo' => '{ Haste } 1 item for 1 second(s).',

      ],

   ],

   // Anchor 
   [
      'item_name' => 'Anchor',
      'item_img' => null,
      'item_state' => true,
      'item_cooldown' => 12,
      'item_max_ammo' => null,
      'item_multicast' => null,

      'hero_id' => 7, // Vanessa
      'min_tier_id' => 8, // Gold - Medium

      'tiers_id' => [8, 9], // [Gold, Diamond] - Medium

      'tags_id' => [22, 3, 5, 39], // ['aquatic', 'damage', 'haste', 'weapon']

      'effects' => [

         [
            'effect_description' => "Deal { Damage } equal to { n1 }% of your enemy's Max Health.",
            'primary_value_bronze' => null,
            'primary_value_silver' => null,
            'primary_value_gold' => 20,
            'primary_value_diamond' => 30,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],
         [
            'effect_description' => "When you use an adjacent item, this gains { Haste } for { n1 } second(s).",
            'primary_value_bronze' => null,
            'primary_value_silver' => null,
            'primary_value_gold' => 2,
            'primary_value_diamond' => 4,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],

      ],

      'enchantments' => [

         'deadly' => '+50% { Crit } Chance',
         'fiery' =>  "{ Burn } 18",
         'golden' => null,
         'heavy' => '{ Slow } 2 item for 4 second(s).',
         'icy' => '{ Freeze } 1 item for 4 second(s).',
         'obsidian' => 'This has { Lifesteal }.',
         'restorative' => "{ Heal } equal to this item's { Damage }.",
         'shielded' => "{ Shield } equal to this item's { Damage }.",
         'shiny' => 'This has +1 Multicast.',
         'toxic' => "{ Poison } 12",
         'turbo' => '{ Haste } 1 item for 2 second(s).',

      ],

   ],

   // Angry Balloon Bot 
   [
      'item_name' => 'Angry Balloon Bot',
      'item_img' => null,
      'item_state' => true,
      'item_cooldown' => 3,
      'item_max_ammo' => null,
      'item_multicast' => null,

      'hero_id' => 2, // Dooley
      'min_tier_id' => 7, // Silver - Medium

      'tiers_id' => [7, 8, 9], // [Silver, Gold, Diamond] - Medium

      'tags_id' => [3, 28, 49, 39], // ['damage', 'friend', 'shieldReference', 'weapon']

      'effects' => [

         [
            'effect_description' => "Deal 10 { Damage }.",
            'primary_value_bronze' => null,
            'primary_value_silver' => null,
            'primary_value_gold' => null,
            'primary_value_diamond' => null,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],
         [
            'effect_description' => "When you lose { Shield }, this gains damage equal to { n1 }% of the { Shield } lost.",
            'primary_value_bronze' => null,
            'primary_value_silver' => 10,
            'primary_value_gold' => 20,
            'primary_value_diamond' => 40,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],

      ],

      'enchantments' => [

         'deadly' => '+50% { Crit } Chance',
         'fiery' =>  "{ Burn } 6",
         'golden' => null,
         'heavy' => '{ Slow } 2 item for 1 second(s).',
         'icy' => '{ Freeze } 1 item for 1 second(s).',
         'obsidian' => 'This has { Lifesteal }.',
         'restorative' => "{ Heal } equal to this item's { Damage }.",
         'shielded' => "{ Shield } equal to this item's { Damage }.",
         'shiny' => 'This has +1 Multicast.',
         'toxic' => "{ Poison } 4",
         'turbo' => '{ Haste } 2 item for 1 second(s).',

      ],

   ],

   // Antimatter Chamber 
   [
      'item_name' => 'Antimatter Chamber',
      'item_img' => null,
      'item_state' => true,
      'item_cooldown' => 10,
      'item_max_ammo' => null,
      'item_multicast' => null,

      'hero_id' => 2, // Dooley
      'min_tier_id' => 14, // Diamond - Large

      'tiers_id' => [14], // [Diamond] - Large

      'tags_id' => [34], // ['tech',]

      'effects' => [

         [
            'effect_description' => "Destroy this and { n1 } small enemy items for the fight.",
            'primary_value_bronze' => null,
            'primary_value_silver' => null,
            'primary_value_gold' => null,
            'primary_value_diamond' => 3,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],

      ],

      'enchantments' => [

         'deadly' => null,
         'fiery' =>  "{ Burn } 22",
         'golden' => null,
         'heavy' => '{ Slow } 3 item for 3 second(s).',
         'icy' => '{ Freeze } 1 item for 4 second(s).',
         'obsidian' => null,
         'restorative' => "{ Heal } 225.",
         'shielded' => "{ Shield } 150.",
         'shiny' => 'This has +1 Multicast.',
         'toxic' => "{ Poison } 15",
         'turbo' => '{ Haste } 3 item for 3 second(s).',

      ],

   ],

   // Apropos Chapeau 
   [
      'item_name' => 'Apropos Chapeau',
      'item_img' => null,
      'item_state' => true,
      'item_cooldown' => 5,
      'item_max_ammo' => null,
      'item_multicast' => null,

      'hero_id' => 5, // Pygmalien
      'min_tier_id' => 7, // Silver - Medium

      'tiers_id' => [7, 8, 9], // [Silver, Gold, Diamond] - Medium

      'tags_id' => [43, 8], //['damageReference', 'shield']

      'effects' => [

         [
            'effect_description' => "{ Shield } { n1 }.",
            'primary_value_bronze' => null,
            'primary_value_silver' => 25,
            'primary_value_gold' => 50,
            'primary_value_diamond' => 100,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],
         [
            'effect_description' => "Adjacent weapons gain { n1 } { Damage } for the fight.",
            'primary_value_bronze' => null,
            'primary_value_silver' => 10,
            'primary_value_gold' => 20,
            'primary_value_diamond' => 30,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],

      ],

      'enchantments' => [

         'deadly' => '+50% { Crit } Chance',
         'fiery' =>  "{ Burn } 7",
         'golden' => null,
         'heavy' => '{ Slow } 2 item for 2 second(s).',
         'icy' => '{ Freeze } 1 item for 2 second(s).',
         'obsidian' => null,
         'restorative' => "{ Heal } equal to this item's { Shield }.",
         'shielded' => "This has double { Shield }.",
         'shiny' => 'This has +1 Multicast.',
         'toxic' => "{ Poison } 5",
         'turbo' => '{ Haste } 2 item for 2 second(s).',

      ],

   ],

   // Arbalest 
   [
      'item_name' => 'Arbalest',
      'item_img' => null,
      'item_state' => true,
      'item_cooldown' => 8,
      'item_max_ammo' => 1,
      'item_multicast' => null,

      'hero_id' => 7, // Vanessa
      'min_tier_id' => 7, // Silver - Medium

      'tiers_id' => [7, 8, 9], // [Silver, Gold, Diamond] - Medium

      'tags_id' => [3, 45, 39], // ['damage', 'hasteRefference', 'weapon']

      'effects' => [

         [
            'effect_description' => 'Deal { n1 } { Damage }.',
            'primary_value_bronze' => null,
            'primary_value_silver' => 50,
            'primary_value_gold' => 100,
            'primary_value_diamond' => 200,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],
         [
            'effect_description' => "When you { Haste }, this gains { n1 } { Damage } for the fight.",
            'primary_value_bronze' => null,
            'primary_value_silver' => 25,
            'primary_value_gold' => 50,
            'primary_value_diamond' => 75,
            'primary_value_legendary' => null,
            'secondary_value_bronze' => null,
            'secondary_value_silver' => null,
            'secondary_value_gold' => null,
            'secondary_value_diamond' => null,
            'secondary_value_legendary' => null,
         ],

      ],

      'enchantments' => [

         'deadly' => '+50% { Crit } Chance',
         'fiery' =>  "{ Burn } 12. When you Haste, this gains +3 Burn for the fight.",
         'golden' => null,
         'heavy' => '{ Slow } 2 item for 3 second(s).',
         'icy' => '{ Freeze } 1 item for 3 second(s).',
         'obsidian' => 'This has { Lifesteal }.',
         'restorative' => "{ Heal } equal to this item's { Damage }.",
         'shielded' => "{ Shield } equal to this item's { Damage }.",
         'shiny' => 'This has +1 Multicast.',
         'toxic' => "{ Poison } 8. When you Haste, this gains +2 { Poison } for the fight.",
         'turbo' => '{ Haste } 2 item for 3 second(s).',

      ],

   ],
];
