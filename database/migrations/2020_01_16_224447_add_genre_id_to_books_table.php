<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGenreIdToBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            // 1. New column
            $table->unsignedInteger('genre_id')->after('id')->nullable();

            // 2. Create foreign key constraints
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
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

            // 2. Drop the column
            $table->dropColumn('genre_id');
        });
    }
}
