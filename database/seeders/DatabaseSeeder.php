<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Rizki Setiawan',
            'username' => 'rizkisetiawan',
            'email' => 'riskysetiawanakbar@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, sed! Aut vero voluptatum doloribus qui similique, impedit saepe eius nulla unde nemo laboriosam magni consectetur numquam reiciendis eligendi ducimus esse dolores ea, dolore corporis nobis? Iusto adipisci qui dolorum consequuntur quae harum libero, cumque nulla mollitia ratione quisquam, facere quidem explicabo tempora sit eligendi, vitae repudiandae inventore sunt praesentium commodi aliquid ut voluptate obcaecati. Molestiae repellat nemo quis iste similique inventore aperiam voluptatum distinctio? Numquam, odit delectus dicta error id cumque quos officiis recusandae ab sequi nam cum deleniti blanditiis mollitia hic optio facere quia atque autem placeat ipsam vitae unde iusto tenetur. Impedit iste ea perferendis maiores accusamus repudiandae repellat ab! Iure tenetur minima deserunt tempora, pariatur molestias eius enim commodi quam!',
        //     'user_id' => 1,
        //     'category_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, sed! Aut vero voluptatum doloribus qui similique, impedit saepe eius nulla unde nemo laboriosam magni consectetur numquam reiciendis eligendi ducimus esse dolores ea, dolore corporis nobis? Iusto adipisci qui dolorum consequuntur quae harum libero, cumque nulla mollitia ratione quisquam, facere quidem explicabo tempora sit eligendi, vitae repudiandae inventore sunt praesentium commodi aliquid ut voluptate obcaecati. Molestiae repellat nemo quis iste similique inventore aperiam voluptatum distinctio? Numquam, odit delectus dicta error id cumque quos officiis recusandae ab sequi nam cum deleniti blanditiis mollitia hic optio facere quia atque autem placeat ipsam vitae unde iusto tenetur. Impedit iste ea perferendis maiores accusamus repudiandae repellat ab! Iure tenetur minima deserunt tempora, pariatur molestias eius enim commodi quam!',
        //     'user_id' => 1,
        //     'category_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, sed! Aut vero voluptatum doloribus qui similique, impedit saepe eius nulla unde nemo laboriosam magni consectetur numquam reiciendis eligendi ducimus esse dolores ea, dolore corporis nobis? Iusto adipisci qui dolorum consequuntur quae harum libero, cumque nulla mollitia ratione quisquam, facere quidem explicabo tempora sit eligendi, vitae repudiandae inventore sunt praesentium commodi aliquid ut voluptate obcaecati. Molestiae repellat nemo quis iste similique inventore aperiam voluptatum distinctio? Numquam, odit delectus dicta error id cumque quos officiis recusandae ab sequi nam cum deleniti blanditiis mollitia hic optio facere quia atque autem placeat ipsam vitae unde iusto tenetur. Impedit iste ea perferendis maiores accusamus repudiandae repellat ab! Iure tenetur minima deserunt tempora, pariatur molestias eius enim commodi quam!',
        //     'user_id' => 1,
        //     'category_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, sed! Aut vero voluptatum doloribus qui similique, impedit saepe eius nulla unde nemo laboriosam magni consectetur numquam reiciendis eligendi ducimus esse dolores ea, dolore corporis nobis? Iusto adipisci qui dolorum consequuntur quae harum libero, cumque nulla mollitia ratione quisquam, facere quidem explicabo tempora sit eligendi, vitae repudiandae inventore sunt praesentium commodi aliquid ut voluptate obcaecati. Molestiae repellat nemo quis iste similique inventore aperiam voluptatum distinctio? Numquam, odit delectus dicta error id cumque quos officiis recusandae ab sequi nam cum deleniti blanditiis mollitia hic optio facere quia atque autem placeat ipsam vitae unde iusto tenetur. Impedit iste ea perferendis maiores accusamus repudiandae repellat ab! Iure tenetur minima deserunt tempora, pariatur molestias eius enim commodi quam!',
        //     'user_id' => 1,
        //     'category_id' => 3,
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Game',
            'slug' => 'game'
        ]);


        Category::create([
            'name' => 'Olahraga',
            'slug' => 'olahraga'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        Post::factory(20)->create();
    }
}
