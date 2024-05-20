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
        Schema::create('patient_ob_gyne_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Patient::class)->constrained('patients');

            $table->string('gyne_surgery')->nullable();
            $table->tinyInteger('is_pregnant')->default(0);
            $table->string('g')->nullable();
            $table->string('p')->nullable();

            $table->integer('age_of_gestation')->nullable();
            $table->date('expected_delivery')->nullable();
            $table->date('last_menstrual_period')->nullable();
            $table->date('prev_menstrual_period')->nullable();

            $table->integer('age_of_menarche ')->nullable();
            $table->integer('age_of_menopausal')->nullable();

            $table->tinyInteger('is_birth_control')->default(0);
            $table->string('bc_type')->nullable();


            $table->date('pap_smear')->nullable();
            $table->date('mammography')->nullable();

            $table->tinyInteger('is_dysmenorrhea')->default(0);
            $table->tinyInteger('is_viginal_discharge')->default(0);
            $table->tinyInteger('is_pain_viginal_sex')->default(0);
            $table->tinyInteger('is_vaginal_lesions_mass_warts')->default(0);

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
        Schema::dropIfExists('patient_ob_gyne_histories');
    }
};
