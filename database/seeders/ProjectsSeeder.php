<?php

namespace Database\Seeders;

use App\Models\Projects;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i<5; $i++)
        {
            Projects::create([
                'type' => rand(1,3),
                'slug' =>  Str::slug(Str::random(10)),
                'title' =>  Str::random(10),
                'keywords' =>  Str::random(10),
                'description' =>  Str::random(10),
                'cover' =>  "cover-".Str::random(10).".jpg",
                'homeCover' =>  "home-".Str::random(10).".jpg",
                'homeAdd' => (string)rand(0,1),
                'content' =>  Str::random(100),
                'state' =>  "1",
            ]);
        }
    }
}
