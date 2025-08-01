<?php

use App\Models\customer;
use App\Models\purchase;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->foreignIdFor(customer::class, 'customer_id')->constrained('customers', 'customer_id');
            $table->foreignIdFor(purchase::class, 'purchase_id')->constrained('purchases', 'purchase_id');
            $table->increments('transaction_id');
            $table->string('payment');
            $table->string('card_number');
            $table->string('amount');
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
