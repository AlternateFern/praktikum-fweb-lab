<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // create_transactions_table
	public function up(): void
	{
	    Schema::create('transactions', function (Blueprint $table) {
	        $table->id();
	        $table->string('invoice_number')->unique();
	        $table->foreignId('user_id')->constrained();
	        $table->unsignedBigInteger('total');
	        $table->unsignedBigInteger('pay');
	        $table->unsignedBigInteger('change');
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
