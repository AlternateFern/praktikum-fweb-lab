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
	    Schema::create('products', function (Blueprint $table) {
	        $table->id();
	        $table->foreignId('category_id')->constrained()->cascadeOnDelete();
	        $table->string('code')->unique();
	        $table->string('name');
	        $table->string('unit')->default('pcs');
	        $table->unsignedBigInteger('price');
	        $table->unsignedInteger('stock')->default(0);
	        $table->timestamps();
	    });
	}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
