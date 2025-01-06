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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // Optional link to a registered user
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->decimal('amount', 10, 2);
            $table->string('payment_method'); // e.g., 'PayPal', 'Stripe'
            $table->string('transaction_id')->nullable(); // For payment gateway tracking
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
