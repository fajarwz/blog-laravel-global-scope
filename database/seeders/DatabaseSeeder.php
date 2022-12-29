<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Laravel CRUD Tutorial',
            'content' => 'This is the content of Laravel CRUD Tutorial',
            'is_draft' => 0,
        ]);
        Post::create([
            'title' => 'VueJS CRUD Tutorial',
            'content' => 'This is the content of VueJS CRUD Tutorial',
            'is_draft' => 0,
        ]);
        Post::create([
            'title' => 'React CRUD Tutorial',
            'content' => 'This is the content of React CRUD Tutorial',
            'is_draft' => 1,
        ]);
    }
}
