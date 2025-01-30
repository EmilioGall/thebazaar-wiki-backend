<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Per usare il DB facade
use App\Models\Item;
use App\Models\Tag;

class ItemTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $items = config('items');

        foreach ($items as $item) {

            $existingItem = Item::where('item_name', $item['item_name'])->first();

            if ($existingItem && isset($item['tags_id'])) {

                foreach ($item['tags_id'] as $tagId) {

                    $existingTag = Tag::find($tagId);

                    if ($existingTag) {

                        $exists = DB::table('item_tag')->where([

                            'item_id' => $existingItem->id,
                            'tag_id' => $existingTag->id,

                        ])->exists();

                        if (!$exists) {

                            DB::table('item_tag')->insert([

                                'item_id' => $existingItem->id,
                                'tag_id' => $existingTag->id,

                            ]);
                        }
                    }
                }
            }
        }
    }
}