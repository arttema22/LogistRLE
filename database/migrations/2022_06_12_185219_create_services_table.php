<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->BigInteger('route_id')->unsigned();
            $table->foreign('route_id')->references('id')->on('routes');
            $table->BigInteger('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('dir_services');
            $table->float('price', 8, 2);
            $table->Integer('number_operations');
            $table->float('sum', 8, 2);
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
        Schema::dropIfExists('services');
    }
}
