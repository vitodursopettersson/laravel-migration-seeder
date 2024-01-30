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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('azienda', 20);
            $table->string('stazione_partenza', 20);
            $table->string('stazione_arrivo', 20);
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->string('codice_treno', 20);
            $table->integer('carrozze_treno');
            $table->boolean('in_orario');
            $table->boolean('cancellato')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
