<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddpostmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addpostmodels', function (Blueprint $table) {
            $table->id();
            $table->string('Aname')->nullable();
            $table->string('Aimg')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('postimg')->nullable();
            $table->string('pdfname')->nullable();
            $table->string('price')->nullable();
            $table->string('heart')->nullable();
            $table->string('view')->nullable();
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
        Schema::dropIfExists('addpostmodels');
    }
}
