<?php

return [

   // Abacus
   [
      'item_name' => 'Abacus',
      'item_name_it' => null,
      'item_name_fr' => null,
      'item_state' => true,
      'item_cooldown' => 4,
      'item_max_ammo' => null,

      'hero_id' => 5, // Pygmalien
      'min_tier_id' => 3, // Gold - Small

      'tags' => ['shield', 'economy', 'tool'],

      'effect_1' => '{ Shield } equal to { n } the value of the adjacent items.',
      'value1_bronze' => null,
      'value1_silver' => null,
      'value1_gold' => 1,
      'value1_diamond' => 2,
      'value1_legendary' => null,

      'effect_2' => null,
      'value2_bronze' => null,
      'value2_silver' => null,
      'value2_gold' => null,
      'value2_diamond' => null,
      'value2_legendary' => null,

      'enchantment_deadly' => null,
      'enchantment_fiery' => null,
      'enchantment_golden' => 'Adjacent items have +50% { Value }.',
      'enchantment_heavy' => '{ Slow } 1 item for 1 second(s).',
      'enchantment_icy' => null,
      'enchantment_obsidian' => null,
      'enchantment_restorative' => null,
      'enchantment_shielded' => null,
      'enchantment_shiny' => null,
      'enchantment_toxic' => null,
      'enchantment_turbo' => null,
   ],

   // Agility Boots
   [
      'item_name' => 'Agility Boots',
      'item_name_it' => null,
      'item_name_fr' => null,
      'item_state' => false,
      'item_cooldown' => null,
      'item_max_ammo' => null,

      'hero_id' => 1, // Common
      'min_tier_id' => 1, // Bronze - Small

      'tags' => ['crit'],

      'effect_1' => 'Adjacent items have +{ n }% { Crit } chance.',
      'value1_bronze' => 3,
      'value1_silver' => 6,
      'value1_gold' => 9,
      'value1_diamond' => 12,
      'value1_legendary' => null,

      'effect_2' => 'When you sell this, your items gain +{ n }% { Crit } chance.',
      'value2_bronze' => 1,
      'value2_silver' => 2,
      'value2_gold' => 3,
      'value2_diamond' => 4,
      'value2_legendary' => null,

      'enchantment_deadly' => null,
      'enchantment_fiery' => null,
      'enchantment_golden' => null,
      'enchantment_heavy' => null,
      'enchantment_icy' => null,
      'enchantment_obsidian' => null,
      'enchantment_restorative' => null,
      'enchantment_shielded' => null,
      'enchantment_shiny' => 'This gives double + { Crit } Chance.',
      'enchantment_toxic' => null,
      'enchantment_turbo' => null,
   ],

   // Alpha Ray
   [
      'item_name' => 'Alpha Ray',
      'item_name_it' => null,
      'item_name_fr' => null,
      'item_state' => true,
      'item_cooldown' => 5,
      'item_max_ammo' => null,

      'hero_id' => 2, // Dooley
      'min_tier_id' => 1, // Bronze - Small

      'tags' => ['damage', 'ray', 'weapon'],

      'effect_1' => 'Deal { n } { Damage }.',
      'value1_bronze' => 5,
      'value1_silver' => 10,
      'value1_gold' => 20,
      'value1_diamond' => 40,
      'value1_legendary' => null,

      'effect_2' => 'When you use the Core or another Ray, your Weapons gain { n } { Damage } for the fight.',
      'value2_bronze' => 3,
      'value2_silver' => 6,
      'value2_gold' => 9,
      'value2_diamond' => 12,
      'value2_legendary' => null,

      'enchantment_deadly' => '+50% { Crit } Chance',
      'enchantment_fiery' => '{ Burn } 4.',
      'enchantment_golden' => null,
      'enchantment_heavy' => '{ Slow } 1 item for 1 second(s).',
      'enchantment_icy' => '{ Freeze } 1 item for 1 second(s).',
      'enchantment_obsidian' => 'This has { Lifesteal }.',
      'enchantment_restorative' => "{ Heal } equal to this item's { Damage }.",
      'enchantment_shielded' => "{ Shield } equal to this item's { Damage }.",
      'enchantment_shiny' => 'This has +1 { Multicast }.',
      'enchantment_toxic' => '{ Poison } 2.',
      'enchantment_turbo' => '{ Haste } 1 item for 1 second(s).',
   ],

   // Amber
   [
      'item_name' => 'Amber',
      'item_name_it' => null,
      'item_name_fr' => null,
      'item_state' => true,
      'item_cooldown' => 5,
      'item_max_ammo' => null,

      'hero_id' => 4, // Mak
      'min_tier_id' => 2, // Silver - Small

      'tags' => ['slow'],

      'effect_1' => '{ Slow } { n } items for 3 second(s).',
      'value1_bronze' => null,
      'value1_silver' => 1,
      'value1_gold' => 2,
      'value1_diamond' => 3,
      'value1_legendary' => null,

      'effect_2' => 'Your other { Slow } items have +1 { Slow }.',
      'value2_bronze' => null,
      'value2_silver' => null,
      'value2_gold' => null,
      'value2_diamond' => null,
      'value2_legendary' => null,

      'enchantment_deadly' => null,
      'enchantment_fiery' => '{ Burn } 4.',
      'enchantment_golden' => null,
      'enchantment_heavy' => 'This has double { Slow } duration.',
      'enchantment_icy' => '{ Freeze } 1 item for 1 second(s).',
      'enchantment_obsidian' => null,
      'enchantment_restorative' => '{ Heal } 40.',
      'enchantment_shielded' => '{ Shield } 25.',
      'enchantment_shiny' => 'This has +1 { Multicast }.',
      'enchantment_toxic' => '{ Poison } 2.',
      'enchantment_turbo' => '{ Haste } 1 item for 1 second(s).',
   ],

   // Ambergris 
   [
      'item_name' => 'Ambergris',
      'item_name_it' => null,
      'item_name_fr' => null,
      'item_state' => true,
      'item_cooldown' => 6,
      'item_max_ammo' => null,

      'hero_id' => 7, // Vanessa
      'min_tier_id' => 1, // Bronze - Small

      'tags' => ['aquatic', 'economy', 'heal', 'value'],

      'effect_1' => "{ Heal } equal to { n }x this item's { Value }.",
      'value1_bronze' => 1,
      'value1_silver' => 2,
      'value1_gold' => 3,
      'value1_diamond' => 4,
      'value1_legendary' => null,

      'effect_2' => 'When you buy another Aquatic item, this gains { n } { Value }.',
      'value2_bronze' => 1,
      'value2_silver' => 2,
      'value2_gold' => 3,
      'value2_diamond' => 4,
      'value2_legendary' => null,

      'enchantment_deadly' => '+50% { Crit } Chance',
      'enchantment_fiery' =>  "{ Burn } equal to this item's { Value }.",
      'enchantment_golden' => 'Double { Value }',
      'enchantment_heavy' => '{ Slow } 1 item for 1 second(s).',
      'enchantment_icy' => '{ Freeze } 1 item for 1 second(s).',
      'enchantment_obsidian' => null,
      'enchantment_restorative' => 'This has double { Heal }.',
      'enchantment_shielded' => "{ Shield } equal to this item's { Heal }.",
      'enchantment_shiny' => 'This has +1 Multicast.',
      'enchantment_toxic' => "{ Poison } equal to this item's { Value }.",
      'enchantment_turbo' => '{ Haste } 1 item for 1 second(s).',
   ],

   // Anchor 
   [
      'item_name' => 'Anchor',
      'item_name_it' => null,
      'item_name_fr' => null,
      'item_state' => true,
      'item_cooldown' => 12,
      'item_max_ammo' => null,

      'hero_id' => 7, // Vanessa
      'min_tier_id' => 8, // Gold - Medium

      'tags' => ['aquatic', 'damage', 'haste', 'weapon'],

      'effect_1' => "Deal { Damage } equal to { n }% of your enemy's Max Health.",
      'value1_bronze' => null,
      'value1_silver' => null,
      'value1_gold' => 20,
      'value1_diamond' => 30,
      'value1_legendary' => null,

      'effect_2' => "When you use an adjacent item, this gains { Haste } for { n } second(s).",
      'value2_bronze' => null,
      'value2_silver' => null,
      'value2_gold' => 2,
      'value2_diamond' => 4,
      'value2_legendary' => null,

      'enchantment_deadly' => '+50% { Crit } Chance',
      'enchantment_fiery' =>  "{ Burn } 18",
      'enchantment_golden' => null,
      'enchantment_heavy' => '{ Slow } 2 item for 4 second(s).',
      'enchantment_icy' => '{ Freeze } 1 item for 4 second(s).',
      'enchantment_obsidian' => 'This has { Lifesteal }.',
      'enchantment_restorative' => "{ Heal } equal to this item's { Damage }.",
      'enchantment_shielded' => "{ Shield } equal to this item's { Damage }.",
      'enchantment_shiny' => 'This has +1 Multicast.',
      'enchantment_toxic' => "{ Poison } 12",
      'enchantment_turbo' => '{ Haste } 1 item for 2 second(s).',
   ],

   // Angry Balloon Bot 
   [
      'item_name' => 'Angry Balloon Bot',
      'item_name_it' => null,
      'item_name_fr' => null,
      'item_state' => true,
      'item_cooldown' => 3,
      'item_max_ammo' => null,

      'hero_id' => 2, // Dooley
      'min_tier_id' => 7, // Silver - Medium

      'tags' => ['damage', 'friend', 'shieldReference', 'weapon'],

      'effect_1' => "Deal 10 { Damage }.",
      'value1_bronze' => null,
      'value1_silver' => null,
      'value1_gold' => null,
      'value1_diamond' => null,
      'value1_legendary' => null,

      'effect_2' => "When you lose { Shield }, this gains damage equal to { n }% of the { Shield } lost.",
      'value2_bronze' => null,
      'value2_silver' => 10,
      'value2_gold' => 20,
      'value2_diamond' => 40,
      'value2_legendary' => null,

      'enchantment_deadly' => '+50% { Crit } Chance',
      'enchantment_fiery' =>  "{ Burn } 6",
      'enchantment_golden' => null,
      'enchantment_heavy' => '{ Slow } 2 item for 1 second(s).',
      'enchantment_icy' => '{ Freeze } 1 item for 1 second(s).',
      'enchantment_obsidian' => 'This has { Lifesteal }.',
      'enchantment_restorative' => "{ Heal } equal to this item's { Damage }.",
      'enchantment_shielded' => "{ Shield } equal to this item's { Damage }.",
      'enchantment_shiny' => 'This has +1 Multicast.',
      'enchantment_toxic' => "{ Poison } 4",
      'enchantment_turbo' => '{ Haste } 2 item for 1 second(s).',
   ],

   // Antimatter Chamber 
   [
      'item_name' => 'Antimatter Chamber',
      'item_name_it' => null,
      'item_name_fr' => null,
      'item_state' => true,
      'item_cooldown' => 10,
      'item_max_ammo' => null,

      'hero_id' => 2, // Dooley
      'min_tier_id' => 14, // Diamond - Large

      'tags' => ['tech',],

      'effect_1' => "Destroy this and { n } small enemy items for the fight.",
      'value1_bronze' => null,
      'value1_silver' => null,
      'value1_gold' => null,
      'value1_diamond' => 3,
      'value1_legendary' => null,

      'effect_2' => null,
      'value2_bronze' => null,
      'value2_silver' => null,
      'value2_gold' => null,
      'value2_diamond' => null,
      'value2_legendary' => null,

      'enchantment_deadly' => null,
      'enchantment_fiery' =>  "{ Burn } 22",
      'enchantment_golden' => null,
      'enchantment_heavy' => '{ Slow } 3 item for 3 second(s).',
      'enchantment_icy' => '{ Freeze } 1 item for 4 second(s).',
      'enchantment_obsidian' => null,
      'enchantment_restorative' => "{ Heal } 225.",
      'enchantment_shielded' => "{ Shield } 150.",
      'enchantment_shiny' => 'This has +1 Multicast.',
      'enchantment_toxic' => "{ Poison } 15",
      'enchantment_turbo' => '{ Haste } 3 item for 3 second(s).',
   ],

   // Apropos Chapeau 
   [
      'item_name' => 'Apropos Chapeau',
      'item_name_it' => null,
      'item_name_fr' => null,
      'item_state' => true,
      'item_cooldown' => 5,
      'item_max_ammo' => null,

      'hero_id' => 5, // Pygmalien
      'min_tier_id' => 7, // Silver - Medium

      'tags' => ['damageReference', 'shield'],

      'effect_1' => "{ Shield } { n }.",
      'value1_bronze' => null,
      'value1_silver' => 25,
      'value1_gold' => 50,
      'value1_diamond' => 100,
      'value1_legendary' => null,

      'effect_2' => "Adjacent weapons gain { n } { Damage } for the fight.",
      'value2_bronze' => null,
      'value2_silver' => 10,
      'value2_gold' => 20,
      'value2_diamond' => 30,
      'value2_legendary' => null,

      'enchantment_deadly' => '+50% { Crit } Chance',
      'enchantment_fiery' =>  "{ Burn } 7",
      'enchantment_golden' => null,
      'enchantment_heavy' => '{ Slow } 2 item for 2 second(s).',
      'enchantment_icy' => '{ Freeze } 1 item for 2 second(s).',
      'enchantment_obsidian' => null,
      'enchantment_restorative' => "{ Heal } equal to this item's { Shield }.",
      'enchantment_shielded' => "This has double { Shield }.",
      'enchantment_shiny' => 'This has +1 Multicast.',
      'enchantment_toxic' => "{ Poison } 5",
      'enchantment_turbo' => '{ Haste } 2 item for 2 second(s).',
   ],

   // Arbalest 
   [
      'item_name' => 'Arbalest',
      'item_name_it' => null,
      'item_name_fr' => null,
      'item_state' => true,
      'item_cooldown' => 8,
      'item_max_ammo' => 1,

      'hero_id' => 7, // Vanessa
      'min_tier_id' => 7, // Silver - Medium

      'tags' => ['damage', 'hasteRefference', 'weapon'],

      'effect_1' => 'Deal { n } { Damage }.',
      'value1_bronze' => null,
      'value1_silver' => 50,
      'value1_gold' => 100,
      'value1_diamond' => 200,
      'value1_legendary' => null,

      'effect_2' => "When you { Haste }, this gains { n } { Damage } for the fight.",
      'value2_bronze' => null,
      'value2_silver' => 25,
      'value2_gold' => 50,
      'value2_diamond' => 75,
      'value2_legendary' => null,

      'enchantment_deadly' => '+50% { Crit } Chance',
      'enchantment_fiery' =>  "{ Burn } 12. When you Haste, this gains +3 Burn for the fight.",
      'enchantment_golden' => null,
      'enchantment_heavy' => '{ Slow } 2 item for 3 second(s).',
      'enchantment_icy' => '{ Freeze } 1 item for 3 second(s).',
      'enchantment_obsidian' => 'This has { Lifesteal }.',
      'enchantment_restorative' => "{ Heal } equal to this item's { Damage }.",
      'enchantment_shielded' => "{ Shield } equal to this item's { Damage }.",
      'enchantment_shiny' => 'This has +1 Multicast.',
      'enchantment_toxic' => "{ Poison } 8. When you Haste, this gains +2 { Poison } for the fight.",
      'enchantment_turbo' => '{ Haste } 2 item for 3 second(s).',
   ],
];
