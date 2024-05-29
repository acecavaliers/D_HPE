<?php

use App\Models\FamilyHistory;
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
        Schema::create('patient_fam_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Patient::class)->constrained('patients');
            $table->foreignIdFor(FamilyHistory::class)->constrained('family_histories');
            $table->string('details')->nullable();
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
        Schema::dropIfExists('patient_fam_histories');
    }
};
