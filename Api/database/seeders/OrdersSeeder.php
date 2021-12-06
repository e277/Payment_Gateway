<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'customer_id' => Customer::all()->random()->id,
        ]);
    }
}
