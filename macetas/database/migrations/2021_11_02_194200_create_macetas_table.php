<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMacetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('macetas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->uuid('uuid');
            $table->string('file');
            $table->string('description');
            $table->string('color');
            $table->string('quantity');
            $table->string('material');
            $table->string('status');
            $table->text('comment');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('macetas');
    }
}
