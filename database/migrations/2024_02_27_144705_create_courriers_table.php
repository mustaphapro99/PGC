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
        Schema::create('courriers', function (Blueprint $table) {
            $table->id();
            $table->string('num_ordre_rrc');
            $table->string('num_ordre_sce');
            $table->string('objet');
            $table->date('date');
            $table->string('annee');
            $table->integer('type_id')->unsigned();
            $table->integer('organe_id')->unsigned();
            $table->integer('direction_id')->unsigned();
            $table->integer('classification_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courriers');
    }
};
