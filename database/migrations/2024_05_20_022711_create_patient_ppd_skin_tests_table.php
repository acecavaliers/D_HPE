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
        Schema::create('patient_ppd_skin_tests', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Patient::class)->constrained('patients');
            $table->tinyInteger('is_applied')->default(0);
            $table->string('fst_ppd_datetime_administered')->nullable();
            $table->string('fst_ppd_administered_by')->nullable();
            $table->tinyInteger('fst_ppd_result')->default(0);
            $table->string('fst_ppd_interpreted_by')->nullable();

            $table->string('snd_ppd_datetime_administered')->nullable();
            $table->string('snd_ppd_administered_by')->nullable();
            $table->tinyInteger('snd_ppd_result')->default(0);
            $table->string('snd_ppd_interpreted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_ppd_skin_tests');
    }
};
