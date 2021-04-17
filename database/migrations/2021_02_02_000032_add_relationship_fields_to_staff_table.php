<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToStaffTable extends Migration
{
    public function up()
    {
        Schema::table('staff', function (Blueprint $table) {
            $table->unsignedBigInteger('title_id')->nullable();
            $table->foreign('title_id', 'title_fk_3104979')->references('id')->on('titles');
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id', 'department_fk_3104980')->references('id')->on('departments');
            $table->unsignedBigInteger('position_id')->nullable();
            $table->foreign('position_id', 'position_fk_3104981')->references('id')->on('positions');
        });
    }
}
