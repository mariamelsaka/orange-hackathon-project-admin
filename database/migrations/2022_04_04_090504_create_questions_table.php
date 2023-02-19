<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string(column:'question_content',length: 200)->unique();
            $table->string(column:'question_answer',length: 250)->unique();
            $table->unsignedBigInteger('exam_id')->nullable();
            $table->timestamps();
            
            $table->foreign('exam_id')
            ->references('id')
            ->on('exams')
            ->onUpdate('CASCADE')
            ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
};