<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('demande_davis', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('medcine_1');
            $table->string('medcine_2');
            $table->string('name_medcine_1');
            $table->string('name_medcine_2');
            $table->string('userID_action');
            $table->date('date_start');
            $table->date('date_end');
            $table->string('note_medcine_2')->nullable();
            $table->string('status')->nullable();
            $table->string('acceptation')->nullable();
            $table->string('question_1')->nullable();
            $table->string('reposne_1')->nullable();
            $table->string('question_2')->nullable();
            $table->string('reposne_2')->nullable();
            $table->string('question_3')->nullable();
            $table->string('reposne_3')->nullable();
            $table->double('Paiement')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_davis');
    }
};
