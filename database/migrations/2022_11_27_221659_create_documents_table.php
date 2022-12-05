<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('eeszt')->create('documents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('doctor_id');
            $table->string('doctor_first_name');
            $table->string('doctor_second_name');
            $table->string('user_first_name');
            $table->string('user_second_name');
            $table->string('TAJ');
            $table->string('treatment');
            $table->string('description');
            $table->date('date');
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
        Schema::connection('eeszt')->dropIfExists('documents');
    }
};
