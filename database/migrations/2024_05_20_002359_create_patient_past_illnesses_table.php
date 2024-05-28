<?php

use App\Models\Illness;
use App\Models\IllnessGroup;
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
        Schema::create('patient_past_illnesses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Patient::class)->constrained('patients');
            $table->foreignIdFor(IllnessGroup::class)->constrained('illness_groups');
            $table->bigInteger('illness_id')->nullable();
            $table->tinyInteger('is_cancer_or_hiv')->default(0);
            $table->string('details')->nullable();
            $table->string('stage')->nullable();
            $table->tinyInteger('on_chemo_or_chemical')->default(0);
            $table->string('remarks')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_past_illnesses');
    }
};
