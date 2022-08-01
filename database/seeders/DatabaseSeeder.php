<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Database\Factories\PostFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Agus Krisna',
            'username' => 'aguskrisna',
            'email' => 'aguskrisna@gmail.com',
            'password' => bcrypt('12345')
        ]);
            
            
        // User::create([
        //     'name' => 'Deddy',
        //     'email' => 'deddy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum sit amet lectus sit amet suscipit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum sit amet lectus sit amet suscipit. Pellentesque fringilla, tellus quis pellentesque blandit, augue sem facilisis eros, quis aliquet ligula dolor a mi. Nullam hendrerit tincidunt ullamcorper. Morbi cursus pharetra nibh ut suscipit. Duis et posuere urna, vel vestibulum orci. Proin ac accumsan nunc. Nullam tristique nisi nibh, ut consectetur tellus eleifend et. Integer consequat leo vitae lacus pharetra consectetur.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum sit amet lectus sit amet suscipit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum sit amet lectus sit amet suscipit. Pellentesque fringilla, tellus quis pellentesque blandit, augue sem facilisis eros, quis aliquet ligula dolor a mi. Nullam hendrerit tincidunt ullamcorper. Morbi cursus pharetra nibh ut suscipit. Duis et posuere urna, vel vestibulum orci. Proin ac accumsan nunc. Nullam tristique nisi nibh, ut consectetur tellus eleifend et. Integer consequat leo vitae lacus pharetra consectetur.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum sit amet lectus sit amet suscipit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum sit amet lectus sit amet suscipit. Pellentesque fringilla, tellus quis pellentesque blandit, augue sem facilisis eros, quis aliquet ligula dolor a mi. Nullam hendrerit tincidunt ullamcorper. Morbi cursus pharetra nibh ut suscipit. Duis et posuere urna, vel vestibulum orci. Proin ac accumsan nunc. Nullam tristique nisi nibh, ut consectetur tellus eleifend et. Integer consequat leo vitae lacus pharetra consectetur.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum sit amet lectus sit amet suscipit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum sit amet lectus sit amet suscipit. Pellentesque fringilla, tellus quis pellentesque blandit, augue sem facilisis eros, quis aliquet ligula dolor a mi. Nullam hendrerit tincidunt ullamcorper. Morbi cursus pharetra nibh ut suscipit. Duis et posuere urna, vel vestibulum orci. Proin ac accumsan nunc. Nullam tristique nisi nibh, ut consectetur tellus eleifend et. Integer consequat leo vitae lacus pharetra consectetur.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
