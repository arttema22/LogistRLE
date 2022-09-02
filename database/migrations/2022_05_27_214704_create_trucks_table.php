<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrucksTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('trucks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->BigInteger('users_id');
            $table->BigInteger('dir_type_trucks_id');
            $table->BigInteger('dir_owner_trucks_id');
            $table->string('truck_number')->unique();
            $table->boolean('status')->default(1);

            //$table->foreign('users_id')->references('id')->on('users');
            //$table->foreign('dir_type_trucks_id')->references('id')->on('dir_type_trucks');
            //$table->foreign('dir_owner_trucks_id')->references('id')->on('dir_owner_trucks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('trucks');
    }

}
