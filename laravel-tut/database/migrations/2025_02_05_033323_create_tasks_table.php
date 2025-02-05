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
        Schema::create('tasks', function (Blueprint $table) {
            $table->integer('task_id');
            $table->string('email')->unique()->nullable(); //allow unique and null value
            $table->string('marks')->comment('pass marks');
            $table->string('city')->default('No city');
            $table->integer('age')->unsigned();//allow only interger no positive and negative
            $table->timestamps();
            $table->primary('task_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
