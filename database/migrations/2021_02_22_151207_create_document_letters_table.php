<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_letters', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('document_id');
            $table->text('title1');
            $table->longText('reference')->nullable();
            $table->text('title2')->nullable();
            $table->text('title3')->nullable();
            $table->longText('description')->nullable();
            $table->text('to_place')->nullable();
            $table->text('text_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document_letters');
    }
}
