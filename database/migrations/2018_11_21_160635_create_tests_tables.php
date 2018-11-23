<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('lection_id');
            $table->timestamps();
        });

        Schema::create('tests_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->integer('test_id');
            $table->timestamps();
        });

        Schema::create('questions_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('answer');
            $table->boolean('correct')->default(false);
            $table->integer('question_id');
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
        Schema::dropIfExists('tests');
        Schema::dropIfExists('tests_questions');
        Schema::dropIfExists('questions_answers');
    }
}
