<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Make data with seeder
        // User::create([
        //     'name' => 'Uki Mahfuda',
        //     'email' => 'mahfuda@gmail.com',
        //     'password' => bcrypt('pass')
        // ]);
        // User::create([
        //     'name' => 'Akhfee Lauki',
        //     'email' => 'lauki@gmail.com',
        //     'password' => bcrypt('pass')
        // ]);
        // Category::create([
        //     'name' => 'Graphic Design',
        //     'slug' => 'graphic-design'
        // ]);
        // Category::create([
        //     'name' => 'Progammer',
        //     'slug' => 'programmer'
        // ]);
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, nemo.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, ea corrupti tempore asperiores beatae corporis facilis distinctio, dolores vitae quidem officiis vel molestias, minus laborum. Eveniet et reiciendis quam voluptates officiis. Doloribus non cumque totam cum est? Deserunt quis molestiae aut suscipit animi, doloremque dignissimos nam harum amet sed labore vel error ad consequuntur est consectetur possimus itaque libero aliquid ex fuga. Sequi architecto sapiente minima qui a facilis id ex maxime ut sed, eius porro, amet possimus quas quo dolor quaerat dolore cum cupiditate explicabo. Fuga voluptatum optio totam eos autem cum ea, qui architecto sint quam maiores quidem!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, nemo.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, ea corrupti tempore asperiores beatae corporis facilis distinctio, dolores vitae quidem officiis vel molestias, minus laborum. Eveniet et reiciendis quam voluptates officiis. Doloribus non cumque totam cum est? Deserunt quis molestiae aut suscipit animi, doloremque dignissimos nam harum amet sed labore vel error ad consequuntur est consectetur possimus itaque libero aliquid ex fuga. Sequi architecto sapiente minima qui a facilis id ex maxime ut sed, eius porro, amet possimus quas quo dolor quaerat dolore cum cupiditate explicabo. Fuga voluptatum optio totam eos autem cum ea, qui architecto sint quam maiores quidem!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);


        Category::create([
            'name' => 'Graphic Design',
            'slug' => 'graphic-design'
        ]);
        Category::create([
            'name' => 'Progammer',
            'slug' => 'programmer'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        User::create([
            'name' => 'Uki Mahfuda',
            'username' => 'ukimahfuda',
            'email' => 'mahfuda@gmail.com',
            'password' => bcrypt('pass')
        ]);
        User::create([
            'name' => 'Akhfee Lauki',
            'username' => 'akhfeelauki',
            'email' => 'lauki@gmail.com',
            'password' => bcrypt('pass')
        ]);
        User::create([
            'name' => 'Mahfuda',
            'username' => 'mahfuda',
            'email' => 'uki@gmail.com',
            'password' => bcrypt('pass')
        ]);
        // User::factory(4)->create();
        // Category::factory(4)->create();
        Post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
