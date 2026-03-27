<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run()
    {
        Order::create([
            'invoice_number' => 'INV-001',
            'customer_number' => 'CUST-001',
            'customer_name' => 'Empresa Demo',
            'fiscal_data' => 'RFC123456',
            'order_datetime' => now(),
            'delivery_address' => 'Culiacán, Sinaloa',
            'notes' => 'Entrega urgente',
            'status_id' => 1,
            'is_deleted' => false
        ]);
    }
}