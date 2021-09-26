<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporateclientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporateclients', function (Blueprint $table) {
            $table->id();
            $table->string('co/pshipname');
            $table->string('pv_no/brn');
            $table->string('nature');
            $table->string('registered_address');
            $table->string('contact');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('created_by');
            $table->string('updated_by');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corporateclients');
    }
}
