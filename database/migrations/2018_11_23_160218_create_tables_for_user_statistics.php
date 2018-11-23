<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesForUserStatistics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_lections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('lection_id');
            $table->timestamps();
        });

        Schema::create('users_practics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('practic_id');
            $table->timestamps();
        });

        Schema::create('users_tests_tries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('test_id');
            $table->float('estimation')->default(0);
            $table->timestamps();
        });

        Schema::create('users_tests_history', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_test_try_id');
            $table->integer('question_id');
            $table->integer('user_answer_id');
            $table->boolean('correct');
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
        Schema::dropIfExists('users_lections');
        Schema::dropIfExists('users_practics');
        Schema::dropIfExists('users_tests_tries');
        Schema::dropIfExists('users_tests_history');
    }
}
