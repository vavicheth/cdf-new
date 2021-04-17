<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('name_kh')->nullable();
            $table->string('abr')->nullable();
            $table->string('abr_kh')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('is_active')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
