<?php

use App\Models\QuestionForm;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateQuestionFormsTable
 */
class CreateQuestionFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', array_keys(QuestionForm::types()))->index();
            $table->unsignedInteger('question_id')->index();
            $table->timestamps();

            $table->foreign('question_id')
                ->references('id')
                ->on('questions')
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
        Schema::dropIfExists('question_forms');
    }
}
