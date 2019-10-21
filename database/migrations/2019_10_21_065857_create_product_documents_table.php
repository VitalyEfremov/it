<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->binary('document');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('document_type_id');
            $table->timestamps();

            $table->foreign('product_id')->references('id')
                ->on('products');
            $table->foreign('document_type_id')->references('id')
                ->on('document_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_documents');
    }
}
