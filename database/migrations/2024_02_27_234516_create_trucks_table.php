<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('reg_number')->unique();
            $table->BigInteger('dir_type_trucks_id')->unsigned();
            $table->foreign('dir_type_trucks_id')->references('id')->on('dir_type_trucks');
            $table->BigInteger('dir_model_trucks_id')->unsigned();
            $table->foreign('dir_model_trucks_id')->references('id')->on('dir_model_trucks');
            $table->text('comment')->nullable();
            $table->boolean('status')->default(1);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trucks');
    }
}
