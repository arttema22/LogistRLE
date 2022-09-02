<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfitsDataTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('profits_data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->BigInteger('profit_id')->unsigned();
            $table->foreign('profit_id')->references('id')->on('profits');
            $table->BigInteger('driver_id')->unsigned();
            $table->foreign('driver_id')->references('id')->on('users');
            $table->float('sum_salary', 8, 2);
            $table->float('sum_refuelings', 8, 2);
            $table->float('sum_routes', 8, 2);
            $table->float('sum_services', 8, 2);
            $table->float('sum_total', 8, 2);
            $table->boolean('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('profits_data');
    }

}
