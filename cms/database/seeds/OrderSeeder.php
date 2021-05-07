<?php

namespace Database\Seeders;
use App\Models\Order;
use App\Models\Product;


use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::factory()->count(30)->create()
            ->each(function ($order) {
                Product::factory()->count(random_int(1, 5))->create([
                    'order_id' => $order->id,
                ]);
            });
    }
}
