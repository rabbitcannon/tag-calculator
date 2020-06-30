<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equations', function (Blueprint $table) {
            $table->id();
            $table->float('first_amount');
            $table->unsignedBigInteger('operator_id');
            $table->float('second_amount');
            $table->float('result');
            $table->timestamps();
        });

        Schema::table('equations', function (Blueprint $table) {
            $table->foreign('operator_id')->references('id')->on('operators');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('equations');
        Schema::enableForeignKeyConstraints();
    }
}
