<?php

namespace Database\Seeders;

use App\Models\Customer;
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
        Customer::factory(10)->create();
        $this->call([
            UserSeeder::class,
            ProductSeeder::class,
            OrdersSeeder::class,
            PaymentSeeder::class,
            TransactionSeeder::class
        ]);
    }
}
