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
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->string('product_id');
            $table->string('name');
            $table->string('title');
            $table->integer('price');
            $table->text('description')->nullable(true);
            $table->text('product_img');
            $table->string('options')->nullable();
            $table->boolean('best_selling')->default(0);
            $table->boolean('popular')->default(0);
            $table->boolean('order_type')->default(0);
            $table->boolean('product_type')->default(0);
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
