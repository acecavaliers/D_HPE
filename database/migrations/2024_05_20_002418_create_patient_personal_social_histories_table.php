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
        Schema::create('patient_personal_social_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Patient::class)->constrained('patients');
            $table->tinyInteger('is_caffeine')->default(0);
            $table->string('caffeine_details')->nullable();
            $table->tinyInteger('is_tobacco')->default(0);
            $table->integer('tobacco_pack_per_day')->nullable();
            $table->integer('tobacco_year')->nullable();
            $table->tinyInteger('is_alcohol')->default(0);
            $table->string('alcohol_last_use')->nullable();
            $table->tinyInteger('is_illegal_drugs')->default(0);
            $table->string('illegal_drugs_type')->nullable();
            $table->string('illegal_drugs_last_use')->nullable();
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
        Schema::dropIfExists('patient_personal_social_histories');
    }
};
