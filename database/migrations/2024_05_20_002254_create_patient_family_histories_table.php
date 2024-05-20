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
        Schema::create('patient_family_histories', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Patient::class)->constrained('patients');
            $table->tinyInteger('is_cardiac')->default(0);
            $table->tinyInteger('is_hypertension')->default(0);
            $table->tinyInteger('is_stroke')->default(0);
            $table->tinyInteger('is_diabetes_mellitus')->default(0);
            $table->tinyInteger('is_bronchial_asthma')->default(0);
            $table->tinyInteger('is_bleeding_disorder')->default(0);
            $table->tinyInteger('is_glaucoma')->default(0);
            $table->tinyInteger('is_thyroid_disorder')->default(0);
            $table->tinyInteger('is_mentyal_illness')->default(0);
            $table->tinyInteger('is_malignancy')->default(0);
            $table->string('otherdetails')->nullable();
            $table->tinyInteger('is_active')->default(0);
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_family_histories');
    }
};
