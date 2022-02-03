<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

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
            'name' => 'Sandhika',
            'username' => 'sandhika',
            'email' => 'sandhikagalih@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name' => 'Doddy',
        //     'email' => 'doddy23@gmail.com',
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
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi ab, voluptate omnis saepe ut quam, maxime, ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi ab, voluptate omnis saepe ut quam, maxime, illo inventore ullam expedita officiis tenetur a dolorem cupiditate veritatis! Eveniet minus vitae esse consectetur dicta, obcaecati exercitationem, eaque sint delectus labore eum officia atque velit sunt unde voluptatibus rem natus eos ex ullam voluptate. Doloribus, quos. Beatae porro similique libero vel impedit. Repellat temporibus nihil, ex blanditiis vel veritatis et nemo iusto eos, id tenetur fugiat harum labore perferendis! Labore animi doloribus necessitatibus voluptatem sapiente blanditiis quia saepe libero minus, odio deserunt molestiae omnis optio temporibus commodi! Officia dolorem incidunt labore et qui!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi ab, voluptate omnis saepe ut quam, maxime, ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi ab, voluptate omnis saepe ut quam, maxime, illo inventore ullam expedita officiis tenetur a dolorem cupiditate veritatis! Eveniet minus vitae esse consectetur dicta, obcaecati exercitationem, eaque sint delectus labore eum officia atque velit sunt unde voluptatibus rem natus eos ex ullam voluptate. Doloribus, quos. Beatae porro similique libero vel impedit. Repellat temporibus nihil, ex blanditiis vel veritatis et nemo iusto eos, id tenetur fugiat harum labore perferendis! Labore animi doloribus necessitatibus voluptatem sapiente blanditiis quia saepe libero minus, odio deserunt molestiae omnis optio temporibus commodi! Officia dolorem incidunt labore et qui!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi ab, voluptate omnis saepe ut quam, maxime, ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi ab, voluptate omnis saepe ut quam, maxime, illo inventore ullam expedita officiis tenetur a dolorem cupiditate veritatis! Eveniet minus vitae esse consectetur dicta, obcaecati exercitationem, eaque sint delectus labore eum officia atque velit sunt unde voluptatibus rem natus eos ex ullam voluptate. Doloribus, quos. Beatae porro similique libero vel impedit. Repellat temporibus nihil, ex blanditiis vel veritatis et nemo iusto eos, id tenetur fugiat harum labore perferendis! Labore animi doloribus necessitatibus voluptatem sapiente blanditiis quia saepe libero minus, odio deserunt molestiae omnis optio temporibus commodi! Officia dolorem incidunt labore et qui!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);


        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi ab, voluptate omnis saepe ut quam, maxime, ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi ab, voluptate omnis saepe ut quam, maxime, illo inventore ullam expedita officiis tenetur a dolorem cupiditate veritatis! Eveniet minus vitae esse consectetur dicta, obcaecati exercitationem, eaque sint delectus labore eum officia atque velit sunt unde voluptatibus rem natus eos ex ullam voluptate. Doloribus, quos. Beatae porro similique libero vel impedit. Repellat temporibus nihil, ex blanditiis vel veritatis et nemo iusto eos, id tenetur fugiat harum labore perferendis! Labore animi doloribus necessitatibus voluptatem sapiente blanditiis quia saepe libero minus, odio deserunt molestiae omnis optio temporibus commodi! Officia dolorem incidunt labore et qui!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
