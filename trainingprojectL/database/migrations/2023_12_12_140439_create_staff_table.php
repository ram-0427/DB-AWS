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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
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
        Schema::create('staffmst', function (Blueprint $table) {
            $table->id('staff_id');
            $table->string('staff_name');
            $table->string('dept_id');
            $table->string('mobile_number');
            $table->string('joining_date');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }
};
