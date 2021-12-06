<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
            'customer_id' => Customer::all()->random()->id,
            'order_id' => Order::all()->random()->id,
            'price_usd' => 12.99
        ]);

        Payment::create([
            'customer_id' => Customer::all()->random()->id,
            'order_id' => Order::all()->random()->id,
            'price_usd' => 15.99
        ]);

        Payment::create([
            'customer_id' => Customer::all()->random()->id,
            'order_id' => Order::all()->random()->id,
            'price_usd' => 20.50
        ]);
    }
}
