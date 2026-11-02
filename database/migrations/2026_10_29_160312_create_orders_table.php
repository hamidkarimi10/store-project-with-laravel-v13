<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('cart_id')->constrained('carts');
            $table->foreignId('discount_id')->nullable()->constrained('discounts');
            $table->foreignId('delivery_id')->nullable()->constrained('deliveries');
            $table->foreignId('address_id')->nullable()->constrained('addresses');
            $table->unsignedBigInteger('totalPrice');
            $table->unsignedBigInteger('totalDiscount');
            $table->enum('status', ['pending', 'processing', 'completed', 'cancelled', 'failed'])->default('pending');
            $table->enum('paymentStatus', ['pending', 'paid', 'failed'])->default('pending');
            $table->enum('paymentMethod', ['cash', 'bank_transfer', 'credit_card', 'debit_card', 'mobile_money'])->default('cash');
            $table->timestamps();
            $table->softDeletes();
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
