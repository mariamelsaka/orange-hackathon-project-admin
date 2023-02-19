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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string(column:'username',length: 25)->nullable();
            $table->string(column:'name',length: 60)->nullable();
            $table->string(column:'phone_number',length: 20)->nullable();
            $table->string(column:'address',length: 125)->nullable();
            $table->string(column:'email',length: 125)->nullable()->unique();
            $table->string(column:'password',length: 125)->nullable();
            $table->string(column:'role')->nullable();
            $table->boolean(column:'is_head')->default(false);
            $table->string(column:'api_token1',length: 125)->nullable();
            $table->unsignedBigInteger(column:'image_id')->nullable();
            $table->unsignedBigInteger(column:'gender_id')->nullable();
            $table->timestamps();

            $table->foreign('image_id')
                ->references('id')
                ->on('images')
                ->onUpdate('CASCADE')
                ->onDelete('SET NULL');

                $table->foreign('gender_id')
                ->references('id')
                ->on('genders')
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
        Schema::dropIfExists('admins');
    }
};
