<?php

use Illuminate\Database\Seeder;
use App\Products;
use App\CategoryName;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $user = Products::create([
                'user_id' => '1',
                'category_id' => '1',
                'review_id' => '1',
                'product_name' => $faker->name,
                'product_code' => $faker->word,
                'product_description' => $faker->paragraph,
                'product_price' => $faker->randomDigit,
                'product_discounted_price' => $faker->randomDigit,
                'product_quantity' => $faker->randomDigit,
                'product_status' => '1'

            ]);
        }
        for ($i = 0; $i < 100; $i++) {
            $user = CategoryName::create([
                'category_name' => $faker->name
            ]);
        }
    }
}
