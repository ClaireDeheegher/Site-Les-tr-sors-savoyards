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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        /*Schema::table('cat', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('categories');
        });*/
    }




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('categories');
        Schema::table('cat', function (Blueprint $table) {
            $table->dropForeign('cat_category_id_foreign');
        });
    }
};
