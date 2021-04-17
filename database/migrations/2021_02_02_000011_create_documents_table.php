<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('letter_code')->nullable();
            $table->string('code_in')->nullable();
            $table->string('document_code')->nullable();
            $table->boolean('submit')->default(0)->nullable();
            $table->longText('description')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->string('code_out')->nullable();
            $table->date('dateline')->nullable();
            $table->date('date_complete')->nullable();
            $table->boolean('complete')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
