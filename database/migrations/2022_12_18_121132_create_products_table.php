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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('prod_id');
            $table->bigInteger('prodRest_id')->unsigned();
            $table->bigInteger('prodType_id')->unsigned();
            $table->string('prod_name');
            $table->integer('prod_price');
            $table->string('prod_desc')->nullable();
            $table->string('prod_img')->nullable();            
            $table->timestamps();

            $table->foreign('prodRest_id')->references('rest_id')->on('restaurants');
            $table->foreign('prodType_id')->references('type_id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
