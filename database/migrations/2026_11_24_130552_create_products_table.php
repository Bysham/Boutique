<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * le produit contient un nom de type chaine de 20 caractères, une description de type 
     * texte, une photo de type chaine chaine de 255 caractère, un prix de type nombre 
     * décimal, une réduction de type nombre décimal, une quantité de entier, nouveau de bouléen,
     * clef étrangère de catégorie de type entier,  
     
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->text('description')->nullable();
            $table->string('photo', 255)->nullable();
            $table->decimal('price', 8, 2);
            $table->decimal('discount', 5, 2)->nullable();
            $table->integer('stock_quantity')->default(0);
            $table->boolean('new')->default(false);
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
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
