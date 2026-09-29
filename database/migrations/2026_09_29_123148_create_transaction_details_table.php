<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // create_transaction_details_table
	public function up(): void
	{
	    Schema::create('transaction_details', function (Blueprint $table) {
	        $table->id();
	        $table->foreignId('transaction_id')->constrained()->cascadeOnDelete();
	        $table->foreignId('product_id')->constrained();
	        $table->unsignedInteger('qty');
	        $table->unsignedBigInteger('price');
	        $table->unsignedBigInteger('subtotal');
	        $table->timestamps();
	    });
	}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_details');
    }
};
