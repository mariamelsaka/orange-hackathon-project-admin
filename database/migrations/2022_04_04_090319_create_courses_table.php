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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string(column:'course_name',length: 200);
            $table->string(column:'course_level',length: 255);
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string(column:'api_token',length: 125)->nullable();
            $table->timestamps();

            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
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
        Schema::dropIfExists('courses');
    }
};
