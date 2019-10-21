<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name');
            $table->binary('logo');
            $table->string('description');
            $table->string('active_substance');
            $table->string('exp_date');

            $table->unsignedInteger('category_id');
            $table->unsignedInteger('product_type_id');

            $table->timestamps();

            $table->foreign('category_id')->references('id')
                ->on('product_categories');
            $table->foreign('product_type_id')->references('id')
                ->on('product_types');
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
