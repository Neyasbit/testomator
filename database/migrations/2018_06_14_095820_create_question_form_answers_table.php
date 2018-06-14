<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateQuestionFormAnswersTable
 */
class CreateQuestionFormAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_form_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('question_id')->index();
            $table->unsignedInteger('question_form_id')->index();
            $table->string('text_content');
            $table->boolean('is_correct_answer')->default(false)->index();
            $table->timestamps();

            $table->unique(['question_id', 'question_form_id']);
            $table->foreign('question_id')
                ->references('id')
                ->on('questions')
                ->onDelete('cascade');
            $table->foreign('question_form_id')
                ->references('id')
                ->on('question_forms')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_form_answers');
    }
}
