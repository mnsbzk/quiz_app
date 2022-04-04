<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choice', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('question_id');
            $table->string('choice_text_1');
            $table->string('choice_text_2');
            $table->string('choice_text_3');
            $table->string('choice_text_4');
            $table->boolean('is_correct_1');
            $table->boolean('is_correct_2');
            $table->boolean('is_correct_3');
            $table->boolean('is_correct_4');
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
        Schema::dropIfExists('choice');
    }
}
