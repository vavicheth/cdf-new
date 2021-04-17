<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('staff_code')->unique();
            $table->string('name');
            $table->string('name_kh');
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->boolean('is_active')->default(0)->nullable();
            $table->string('staff_position')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
