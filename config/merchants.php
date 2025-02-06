<?php

return [

   // Adira
   [
      'merchant_name' => 'Adira',
      'merchant_img' => 'img/merchats/avata-adira.webp',

      'heroes_id' => [1], // [Common]
      'tier_id' => 24, // Diamond - Null
      
      'tags_id' => [], // []
      'tiers_id' =>[19], // [Diamond - Rounded]

      'merchant_day' => 8,
      'merchant_reroll_cost' => null,
      'merchant_type' => 'skills', // ['items', 'skills']
      'merchant_description' => 'Sells Diamond-tier Skills.',

   ],

   // Aero
   [
      'merchant_name' => 'Aero',
      'merchant_img' => 'img/merchats/avata-aero.webp',

      'heroes_id' => [6, 7], // [Stelle, Vanessa]
      'tier_id' => 23, // Gold - Null
      'tags_id' => [39], // ['vehicle']
      'tiers_id' =>[], // []

      'merchant_day' => 6,
      'merchant_reroll_cost' => null,
      'merchant_type' => 'items', // ['items', 'skills']
      'merchant_description' => 'Sells vehicles.',

   ],

   // Aila
   [
      'merchant_name' => 'Aila',
      'merchant_img' => 'img/merchats/avata-aila.webp',

      'heroes_id' => [1], // [Common]
      'tier_id' => 21, // Bronze - Null
      'tags_id' => [40], // ['weapon']
      'tiers_id' =>[], // []

      'merchant_day' => 1,
      'merchant_reroll_cost' => 2,
      'merchant_type' => 'items', // ['items', 'skills']
      'merchant_description' => 'Sells weapons.',

   ],

   // Ande
   [
      'merchant_name' => 'Ande',
      'merchant_img' => 'img/merchats/avata-ande.webp',

      'heroes_id' => [1], // [Common]
      'tier_id' => 21, // Bronze - Null
      'tags_id' => [], // []
      'tiers_id' =>[1, 2, 3, 4, 5], // [Bronze, Silver, Gold, Diamond - Small]

      'merchant_day' => 1,
      'merchant_reroll_cost' => 2,
      'merchant_type' => 'items', // ['items', 'skills']
      'merchant_description' => 'Sells Small items.',

   ],

   // Argenta
   [
      'merchant_name' => 'Argenta',
      'merchant_img' => 'img/merchats/avata-argenta.webp',

      'heroes_id' => [1], // [Common]
      'tier_id' => 22, // Silver - Null
      'tags_id' => [], // []
      'tiers_id' =>[17], // [Silver - Rounded]

      'merchant_day' => null,
      'merchant_reroll_cost' => null,
      'merchant_type' => 'skills', // ['items', 'skills']
      'merchant_description' => 'Sells Silver-tier Skills.',

   ],

   // B1&B2
   [
      'merchant_name' => 'B1&B2',
      'merchant_img' => 'img\merchants\avatar-b1andb2.webp',

      'heroes_id' => [1], // [Common]
      'tier_id' => 24, // Diamond - Null
      'tags_id' => [], // []
      'tiers_id' =>[], // []

      'merchant_day' => null,
      'merchant_reroll_cost' => null,
      'merchant_type' => 'items', // ['items', 'skills']
      'merchant_description' => 'Sells item upgrades.',

   ],

   // Barkun
   [
      'merchant_name' => 'Barkun',
      'merchant_img' => 'img\merchants\avatar-barkun.webp',

      'heroes_id' => [1], // [Common]
      'tier_id' => 22, // Silver - Null
      'tags_id' => [], // []
      'tiers_id' =>[6, 7, 8, 9, 10, 11, 12, 13, 14, 15], // [Bronze, Silver, Gold, Diamond - Medium & Bronze, Silver, Gold, Diamond - Large ]

      'merchant_day' => 1,
      'merchant_reroll_cost' => null,
      'merchant_type' => 'items', // ['items', 'skills']
      'merchant_description' => 'Sells Medium and Large items. Buys your Small items at +1 Value.',

   ],

   // Bjorn
   [
      'merchant_name' => 'Bjorn',
      'merchant_img' => 'img\merchants\avatar-bjorn.webp',

      'heroes_id' => [2, 4, 7], // [Dooley, Mak, Vanessa]
      'tier_id' => 23, // Gold - Null
      'tags_id' => [4], // [freeze]
      'tiers_id' =>[], // []

      'merchant_day' => 6,
      'merchant_reroll_cost' => null,
      'merchant_type' => 'skills', // ['items', 'skills']
      'merchant_description' => 'Sells Freeze skills.',

   ],

   // C4
   [
      'merchant_name' => 'C4',
      'merchant_img' => 'img\merchants\avatar-c4.webp',

      'heroes_id' => [4, 7], // [Mak, Vanessa]
      'tier_id' => 23, // Gold - Null
      'tags_id' => [20], // [ammo]
      'tiers_id' =>[], // []

      'merchant_day' => 3,
      'merchant_reroll_cost' => null,
      'merchant_type' => 'skills', // ['items', 'skills']
      'merchant_description' => 'Sells Ammo skills.',

   ],

   // Cobweb
   [
      'merchant_name' => 'Cobweb',
      'merchant_img' => 'img\merchants\avatar-cobweb.webp',

      'heroes_id' => [1], // [Common]
      'tier_id' => 24, // Diamond - Null
      'tags_id' => [9], // [slow]
      'tiers_id' =>[], // []

      'merchant_day' => 6,
      'merchant_reroll_cost' => null,
      'merchant_type' => 'items', // ['items', 'skills']
      'merchant_description' => 'Sells Slow items.',

   ],
];
