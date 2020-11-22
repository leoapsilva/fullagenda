<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('lastname', 255)->nullable();
            $table->string('phone', 25)->nullable();
            $table->string('mobile', 25)->nullable();
            $table->date('birthday')->nullable();
            $table->string('document', 50)->nullable();
            $table->string('health_insurance_plan', 50)->nullable();
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
        Schema::dropIfExists('patients');
    }
}
