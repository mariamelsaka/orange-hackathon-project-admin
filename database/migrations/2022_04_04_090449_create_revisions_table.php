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
        Schema::create('revisions', function (Blueprint $table) {
            $table->id();
            $table->float(column:'student_degree');
            $table->float(column:'total_right_degree');
            $table->float(column:'total_wrong_degree');
            $table->string(column:'api_token',length: 125)->nullable();
            $table->unsignedBigInteger('student_id')->nullable();
            $table->unsignedBigInteger('exam_id')->nullable();
            $table->timestamps();



            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onUpdate('CASCADE')
                ->onDelete('SET NULL');

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
        Schema::dropIfExists('revisions');
    }
};
