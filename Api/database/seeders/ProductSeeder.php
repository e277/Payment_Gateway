<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'user_id' => User::all()->random()->id,
            'product_nm' => 'Shirt',
            'price_usd' => 7.99
        ]);

        Product::create([
            'user_id' => User::all()->random()->id,
            'product_nm' => 'Shorts',
            'price_usd' => 9.99
        ]);

        Product::create([
            'user_id' => User::all()->random()->id,
            'product_nm' => 'Hats',
            'price_usd' => 2.99
        ]);
    }
}
