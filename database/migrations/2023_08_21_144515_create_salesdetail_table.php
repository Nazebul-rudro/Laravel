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
        Schema::create('salesdetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->decimal('subtotal');
            $table->decimal('discount');
            $table->decimal('total');
            $table->string('paid_by');
            $table->decimal('amount_paid');
            $table->decimal('due_return');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salesdetails');
    }
};