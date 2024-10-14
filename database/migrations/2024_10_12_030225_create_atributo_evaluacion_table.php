<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Atributo;
use App\Models\Evaluacion;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('atributo_evaluacion', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Atributo::class)->constrained();
            $table->foreignIdFor(Evaluacion::class)->constrained("evaluaciones");
            $table->integer("calificacion");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atributo_evaluacion');
    }
};
