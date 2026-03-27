<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number');
            $table->string('customer_number');
            $table->string('customer_name');
            $table->text('fiscal_data');
            $table->dateTime('order_datetime');
            $table->text('delivery_address');
            $table->text('notes')->nullable();
            $table->foreignId('status_id')->constrained('order_statuses');
            $table->boolean('is_deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
