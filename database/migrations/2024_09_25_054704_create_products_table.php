<?php

use App\Models\Category;
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
            $table->foreignId('category_id')
                ->nullable()   // Allows the category_id to be null
                ->constrained()
                ->nullOnDelete();  // Sets category_id to null if category is deleted

            $table->string('name');
            //$table->string('state');//may change it or remove it later idk, i did :>
            $table->string('details');
            $table->integer('quantity');
            $table->decimal('price');
            $table->decimal('cost');

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
