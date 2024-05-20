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
        Schema::create('patient_visual_hearin_speeches', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Patient::class)->constrained('patients');
            $table->string('uncorrected_fv_od20')->nullable();
            $table->string('uncorrected_fv_os20')->nullable();
            $table->string('uncorrected_nv_odj')->nullable();
            $table->string('uncorrected_nv_osj')->nullable();

            $table->string('corrected_fv_od20')->nullable();
            $table->string('corrected_fv_os20')->nullable();
            $table->string('corrected_nv_odj')->nullable();
            $table->string('corrected_nv_osj')->nullable();
            $table->tinyInteger('ishihara')->default(0); //Adequate = 0 Deficient=1
            $table->tinyInteger('speech')->default(0); //Normal = 0 Abnormal=1

            $table->tinyInteger('ad_hearing')->default(0); //Normal = 0 hearingloss=1
            $table->tinyInteger('as_hearing')->default(0); //Normal = 0 hearingloss=1
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_visual_hearin_speeches');
    }
};
