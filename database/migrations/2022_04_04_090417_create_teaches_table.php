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
        Schema::create('teaches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trainer_id')->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->timestamps();

            $table->foreign('trainer_id')
                ->references('id')
                ->on('trainers')
                ->onUpdate('CASCADE')
                ->onDelete('SET NULL');

            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
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
        Schema::dropIfExists('teaches');
    }
};