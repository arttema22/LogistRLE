<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviseDataTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('revise_data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->BigInteger('revise_id')->unsigned();
            $table->foreign('revise_id')->references('id')->on('revises');
            $table->BigInteger('driver_id')->unsigned();
            $table->foreign('driver_id')->references('id')->on('users');
            $table->float('balance_start', 8, 2);
            $table->float('added', 8, 2);
            $table->float('paid', 8, 2);
            $table->float('balance_end', 8, 2);
            $table->boolean('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('revise_data');
    }

}
