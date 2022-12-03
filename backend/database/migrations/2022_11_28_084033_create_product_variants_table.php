<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('pv_name')->nullable();
            $table->string('pv_gram')->nullable();
            $table->unsignedBigInteger('color_id')->nullable();
            $table->string('pv_selling_price')->nullable();
            $table->string('pv_discount_price')->default(0);
            $table->string('pv_discount_percentage')->default(0);
            $table->integer('pv_qty')->default(0);
            $table->string('pv_image')->nullable();
            $table->string('product_slug')->nullable();
            $table->integer('pv_status')->default(1);
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
        Schema::dropIfExists('product_variants');
    }
}
