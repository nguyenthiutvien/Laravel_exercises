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
        Schema::create('shoppe', function (Blueprint $table) {
           
            $table -> increments('id');
            $table -> string ('name');
            $table -> string('image');
            $table -> string('description');
            $table -> integer('price');
            $table -> string('rate');
            $table->timestamps();
            
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shoppe');
    }
};
