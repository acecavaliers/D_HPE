<?php

use App\Models\Patient;
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
        Schema::create('patient_vital_signs_pain_scales', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Patient::class)->constrained('patients');
            $table->decimal('height',5,2)->nullable();
            $table->string('weight')->nullable();
            $table->string('bmi')->nullable();
            $table->tinyInteger('sthenic')->default(0);
            $table->tinyInteger('asthenic')->default(0);
            $table->tinyInteger('hypersthenic')->default(0);
            $table->decimal('blood_pressure',5,2)->nullable();
            $table->decimal('pulse_rate',5,2)->nullable();
            $table->decimal('respiration_rate',5,2)->nullable();
            $table->decimal('Temperature',5,2)->nullable();
            $table->integer('pain')->nullable();
            $table->tinyInteger('is_active')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_vital_signs_pain_scales');
    }
};
