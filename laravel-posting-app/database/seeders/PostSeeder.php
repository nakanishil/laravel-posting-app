<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // PostFactoryクラスで定義した内容でダミーデータを５つ生成、postsテーブルへ追加
        Post::factory()->count(5)->create();
    }
}
