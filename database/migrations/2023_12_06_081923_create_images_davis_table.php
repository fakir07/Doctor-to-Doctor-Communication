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
        Schema::create('images_davis', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_image');
            $table->string('imagePath');
            $table->unsignedBigInteger('davis_id');
            $table->foreign('davis_id')->references('id')->on('demande_davis')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images_davis');
    }
};
