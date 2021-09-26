<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyers', function (Blueprint $table) {
            $table->id();
            $table->string('lawyer_type_id');
            $table->string('lawyerfname');
            $table->string('lawyerlname');
            $table->string('gender');
            $table->string('scenrolment_no');
            $table->string('professional_type_qualification');
            $table->string('yearsof_practice');
            $table->string('areaof_type_practice');
            $table->string('contact');
            $table->string('Address');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('created_by');
            $table->string('updated_by');
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
        Schema::dropIfExists('lawyers');
    }
}