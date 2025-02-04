<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $skills = config('skills');

        foreach ($skills as $skill) {

            $existingSkill = Skill::where('skill_name', $skill['skill_name'])->first();

            if ($existingSkill && isset($skill['tags_id'])) {

                foreach ($skill['tags_id'] as $tagId) {

                    $existingTag = Tag::find($tagId);

                    if ($existingTag) {

                        $exists = DB::table('skill_tag')->where([

                            'skill_id' => $existingSkill->id,
                            'tag_id' => $existingTag->id,

                        ])->exists();

                        if (!$exists) {

                            DB::table('skill_tag')->insert([

                                'skill_id' => $existingSkill->id,
                                'tag_id' => $existingTag->id,

                            ]);
                        }
                    }
                }
            }
        }
    }
}
