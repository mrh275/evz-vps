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
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('user_id', 40);
            $table->string('trx_id');
            $table->string('merchant_ref');
            $table->string('va_code');
            $table->dateTime('order_date');
            $table->dateTime('due_date');
            $table->enum('status', ['unpaid', 'paid', 'expired']);
            $table->integer('total_price');
            $table->integer('item_duration');
            $table->string('vps_id', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
