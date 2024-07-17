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
Schema::create('produits', function (Blueprint $table) {
    $table->id();
    $table->string('nom')->unique();
    $table->double('prix');
    $table->double('quantite');
    $table->double('poid');
    $table->string('description');
    $table->foreignId('categorie_id')->constrained('categories');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('produits');
    }
};
