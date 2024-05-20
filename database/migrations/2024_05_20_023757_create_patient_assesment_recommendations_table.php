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
        Schema::create('patient_assesment_recommendations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Patient::class)->constrained('patients');
            $table->string('assessment')->nullable();
            $table->string('recommendation')->nullable();
            $table->string('physician')->nullable();
            $table->string('exam_date_time')->nullable();
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
        Schema::dropIfExists('patient_assesment_recommendations');
    }
};
