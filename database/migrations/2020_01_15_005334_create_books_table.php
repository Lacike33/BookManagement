<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('books');

        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->unsignedSmallInteger('pages');
            $table->year('year');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            // 1. Drop foreign key constraints
            $table->dropForeign(['genre_id']);
        });
        Schema::dropIfExists('books');
    }
}
