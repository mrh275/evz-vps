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
        Schema::create('services', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('user_id', 40);
            $table->string('trx_id', 40);
            $table->string('merchant_ref');
            $table->string('item_name');
            $table->string('item_desc');
            $table->date('start_date');
            $table->date('expire_date');
            $table->enum('status', ['active', 'inactive', 'expired']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
