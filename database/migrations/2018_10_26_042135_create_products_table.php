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
            $table->increments('product_id');
            $table->bigInteger('user_id');
            $table->bigInteger('category_id');
            $table->bigInteger('review_id')->nullable();
            $table->text('product_name');
            $table->text('product_code')->nullable();
            $table->text('product_description');
            $table->bigInteger('product_price');
            $table->bigInteger('product_discounted_price')->default('0');
            $table->bigInteger('product_quantity')->default('100');
            $table->text('product_status');
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