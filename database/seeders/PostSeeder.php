<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Первый пост',
            'content' => 'бла бла бла дло раоа ааоатовлавлв',
            'description' => 'бла бла',
            'is_published' => true
        ]);
        Post::create([
            'title' => 'Второй пост',
            'content' => 'бла бла бла дло раоа ааоатовлавлв',
            'description' => 'бла бла',
            'is_published' => true
        ]);
        Post::create([
            'title' => 'Третий пост',
            'content' => 'бла бла бла тра ла ла дло раоа ааоатовлавлв',
            'description' => 'бла бла',
            'is_published' => true
        ]);
    }
}
