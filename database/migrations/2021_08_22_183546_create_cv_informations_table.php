<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_informations', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('image')->nullable();
            $table->string('category')->nullable();
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->integer('mobile_number')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('address')->nullable();
            $table->string('job_title_1', 50)->nullable();
            $table->string('company_name_1', 50)->nullable();
            $table->string('duration_1', 50)->nullable();
            $table->string('description_1', 50)->nullable();
            $table->string('job_title_2', 50)->nullable();
            $table->string('company_name_2', 50)->nullable();
            $table->string('duration_2', 50)->nullable();
            $table->string('description_2', 50)->nullable();
            $table->string('job_title_3', 50)->nullable();
            $table->string('company_name_3', 50)->nullable();
            $table->string('duration_3', 50)->nullable();
            $table->string('description_3', 50)->nullable();
            $table->string('job_title_4', 50)->nullable();
            $table->string('company_name_4', 50)->nullable();
            $table->string('duration_4', 50)->nullable();
            $table->string('description_4', 50)->nullable();
            $table->string('job_title_5', 50)->nullable();
            $table->string('company_name_5', 50)->nullable();
            $table->string('duration_5', 50)->nullable();
            $table->string('description_5', 50)->nullable();
            $table->string('exam_name_1', 50)->nullable();
            $table->string('institution_name_1', 50)->nullable();
            $table->string('bord_1', 50)->nullable();
            $table->string('grade_1')->nullable();
            $table->integer('passing_year_1')->nullable();
            $table->string('exam_name_2', 50)->nullable();
            $table->string('institution_name_2', 50)->nullable();
            $table->string('bord_2', 50)->nullable();
            $table->string('grade_2')->nullable();
            $table->integer('passing_year_2')->nullable();
            $table->string('exam_name_3', 50)->nullable();
            $table->string('institution_name_3', 50)->nullable();
            $table->string('bord_3', 50)->nullable();
            $table->string('grade_3')->nullable();
            $table->integer('passing_year_3')->nullable();
            $table->string('exam_name_4', 50)->nullable();
            $table->string('institution_name_4', 50)->nullable();
            $table->string('bord_4', 50)->nullable();
            $table->string('grade_4')->nullable();
            $table->integer('passing_year_4')->nullable();
            $table->string('exam_name_5', 50)->nullable();
            $table->string('institution_name_5', 50)->nullable();
            $table->string('bord_5', 50)->nullable();
            $table->string('grade_5')->nullable();
            $table->integer('passing_year_5')->nullable();
            $table->string('skill_1')->nullable();
            $table->string('ability_1')->nullable();
            $table->string('skill_2')->nullable();
            $table->string('ability_2')->nullable();
            $table->string('skill_3')->nullable();
            $table->string('ability_3')->nullable();
            $table->string('skill_4')->nullable();
            $table->string('ability_4')->nullable();
            $table->string('ln_1')->nullable();
            $table->string('lnab_1')->nullable();
            $table->string('ln_2')->nullable();
            $table->string('lnab_2')->nullable();
            $table->string('ln_3')->nullable();
            $table->string('lnab_3')->nullable();
            $table->string('extra_curriculam_activie')->nullable();
            $table->string('reference')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cv_informations');
    }
}
