<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string("product-name");
            $table->string("product-code");
            $table->string("small-desc");
            $table->integer("product-price");
            $table->string("full-desc");
            $table->integer("product-quantity");
            $table->string("product-image");
            $table->string("sale-price")->nullable();
            $table->integer("catagory_id");
            $table->integer("subcatagory_id");
            $table->integer("series_id")->nullable();
            $table->integer("variety_id");
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
        Schema::dropIfExists('products');
    }
}
