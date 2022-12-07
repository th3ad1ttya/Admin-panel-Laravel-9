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
            $table->string('libARMV7aName');
            $table->string('libARMV8aName');
            $table->string('libARMV7aUrl');
            $table->string('libARMV8aUrl');
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
