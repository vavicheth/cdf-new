<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToUserInfosTable extends Migration
{
    public function up()
    {
        Schema::table('user_infos', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_fk_3101655')->references('id')->on('users');
            $table->unsignedBigInteger('title_id')->nullable();
            $table->foreign('title_id', 'title_fk_3101656')->references('id')->on('titles');
            $table->unsignedBigInteger('position_id')->nullable();
            $table->foreign('position_id', 'position_fk_3101657')->references('id')->on('positions');
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id', 'department_fk_3101658')->references('id')->on('departments');
        });
    }
}
