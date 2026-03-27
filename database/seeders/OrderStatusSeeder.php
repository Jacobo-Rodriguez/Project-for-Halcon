<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderStatus;

class OrderStatusSeeder extends Seeder
{
    public function run()
    {
        OrderStatus::insert([
            ['name' => 'Ordered'],
            ['name' => 'In process'],
            ['name' => 'In route'],
            ['name' => 'Delivered'],
        ]);
    }
}