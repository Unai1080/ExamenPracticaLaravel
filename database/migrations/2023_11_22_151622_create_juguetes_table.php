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
        Schema::create('juguetes', function (Blueprint $table) {
            $table->id();
            $table->string('izena');
            $table->string('deskripzioa');
            $table->integer("stock");
            $table->timestamp('hasieraData');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juguetes');
    }
};
