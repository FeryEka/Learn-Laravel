<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Fery Eka Mahendra',
        //     'email' => '171111117@mhs.stiki.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Rykara',
        //     'email' => '676666666@mhs.stiki.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, rem?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At maiores magnam ipsam consequatur dicta aut autem labore doloribus aspernatur.</p><p>Minus explicabo cupiditate harum aliquid, repudiandae et adipisci ex incidunt. Quae, asperiores debitis. Quas quos perferendis minima repellendus officia autem, itaque maiores illo modi magnam maxime. Fugiat error illum expedita odio itaque corporis quo, laborum amet facilis cumque! Minus rem non laboriosam repellendus quae a quod inventore, provident consectetur eligendi maiores aliquam, sapiente ad fugiat libero quam, explicabo voluptatibus qui ullam nihil suscipit molestiae enim dolor.</p><p>Ullam expedita quo excepturi eveniet iusto praesentium minus laudantium maiores debitis asperiores vero amet, cupiditate nemo nobis iste nam iure obcaecati corporis perferendis labore placeat quis quibusdam alias ipsa! Aperiam vitae maxime nesciunt mollitia consequuntur a dolor inventore.</p><p>Veritatis ullam optio a suscipit, nisi porro aliquam unde eligendi perspiciatis perferendis tenetur placeat alias soluta minima molestias tempore natus ratione voluptas. Doloremque vel commodi perferendis quibusdam?</p>',
        //     'category_id' => 1,
        //     'user_id'=> 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, rem?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At maiores magnam ipsam consequatur dicta aut autem labore doloribus aspernatur.</p><p>Minus explicabo cupiditate harum aliquid, repudiandae et adipisci ex incidunt. Quae, asperiores debitis. Quas quos perferendis minima repellendus officia autem, itaque maiores illo modi magnam maxime. Fugiat error illum expedita odio itaque corporis quo, laborum amet facilis cumque! Minus rem non laboriosam repellendus quae a quod inventore, provident consectetur eligendi maiores aliquam, sapiente ad fugiat libero quam, explicabo voluptatibus qui ullam nihil suscipit molestiae enim dolor.</p><p>Ullam expedita quo excepturi eveniet iusto praesentium minus laudantium maiores debitis asperiores vero amet, cupiditate nemo nobis iste nam iure obcaecati corporis perferendis labore placeat quis quibusdam alias ipsa! Aperiam vitae maxime nesciunt mollitia consequuntur a dolor inventore.</p><p>Veritatis ullam optio a suscipit, nisi porro aliquam unde eligendi perspiciatis perferendis tenetur placeat alias soluta minima molestias tempore natus ratione voluptas. Doloremque vel commodi perferendis quibusdam?</p>',
        //     'category_id' => 1,
        //     'user_id'=> 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, rem?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At maiores magnam ipsam consequatur dicta aut autem labore doloribus aspernatur.</p><p>Minus explicabo cupiditate harum aliquid, repudiandae et adipisci ex incidunt. Quae, asperiores debitis. Quas quos perferendis minima repellendus officia autem, itaque maiores illo modi magnam maxime. Fugiat error illum expedita odio itaque corporis quo, laborum amet facilis cumque! Minus rem non laboriosam repellendus quae a quod inventore, provident consectetur eligendi maiores aliquam, sapiente ad fugiat libero quam, explicabo voluptatibus qui ullam nihil suscipit molestiae enim dolor.</p><p>Ullam expedita quo excepturi eveniet iusto praesentium minus laudantium maiores debitis asperiores vero amet, cupiditate nemo nobis iste nam iure obcaecati corporis perferendis labore placeat quis quibusdam alias ipsa! Aperiam vitae maxime nesciunt mollitia consequuntur a dolor inventore.</p><p>Veritatis ullam optio a suscipit, nisi porro aliquam unde eligendi perspiciatis perferendis tenetur placeat alias soluta minima molestias tempore natus ratione voluptas. Doloremque vel commodi perferendis quibusdam?</p>',
        //     'category_id' => 2,
        //     'user_id'=> 1
        // ]);

        // Post::create([
        //     'title' => 'Judul keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, rem?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At maiores magnam ipsam consequatur dicta aut autem labore doloribus aspernatur.</p><p>Minus explicabo cupiditate harum aliquid, repudiandae et adipisci ex incidunt. Quae, asperiores debitis. Quas quos perferendis minima repellendus officia autem, itaque maiores illo modi magnam maxime. Fugiat error illum expedita odio itaque corporis quo, laborum amet facilis cumque! Minus rem non laboriosam repellendus quae a quod inventore, provident consectetur eligendi maiores aliquam, sapiente ad fugiat libero quam, explicabo voluptatibus qui ullam nihil suscipit molestiae enim dolor.</p><p>Ullam expedita quo excepturi eveniet iusto praesentium minus laudantium maiores debitis asperiores vero amet, cupiditate nemo nobis iste nam iure obcaecati corporis perferendis labore placeat quis quibusdam alias ipsa! Aperiam vitae maxime nesciunt mollitia consequuntur a dolor inventore.</p><p>Veritatis ullam optio a suscipit, nisi porro aliquam unde eligendi perspiciatis perferendis tenetur placeat alias soluta minima molestias tempore natus ratione voluptas. Doloremque vel commodi perferendis quibusdam?</p>',
        //     'category_id' => 2,
        //     'user_id'=> 2
        // ]);
    }
}
