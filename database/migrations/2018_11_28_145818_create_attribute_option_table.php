<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::dropIfExists('attribute_option');
        Schema::create('attribute_option', function (Blueprint $table) {
            $table->increments('attribute_option_id');
            $table->bigInteger('attributes_id');
            $table->bigInteger('option_id');
            $table->bigInteger('product_id');
            $table->bigInteger('AdditionalPrice');
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
        Schema::dropIfExists('attribute_option');
    }
}
