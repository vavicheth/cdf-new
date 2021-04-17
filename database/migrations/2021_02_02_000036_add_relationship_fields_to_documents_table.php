<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDocumentsTable extends Migration
{
    public function up()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->unsignedBigInteger('organisation_id');
            $table->foreign('organisation_id', 'organisation_fk_3101637')->references('id')->on('organisations');
            $table->unsignedBigInteger('document_type_id');
            $table->foreign('document_type_id', 'document_type_fk_3101642')->references('id')->on('document_types');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id', 'category_fk_3107609')->references('id')->on('categories');
        });
    }
}
