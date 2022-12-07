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
        Schema::create('lib32', function (Blueprint $table) {
            $table->id();
            $table->string('libARMV7aName')->nullable();
            $table->string('libARMV8aName')->nullable();
            $table->string('libARMV7aUrl')->nullable();
            $table->string('libARMV8aUrl')->nullable();
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
        Schema::dropIfExists('lib32');
    }
};
