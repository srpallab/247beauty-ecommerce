<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name')->nullable();
            $table->string('brand_url')->nullable();
            $table->integer('brand_discount_amount')->nullable();
            $table->string('brand_image')->nullable();
            $table->integer('top_brand')->nullable();
            $table->integer('featuren_brand')->nullable();
            $table->integer('brand_serial')->nullable();
            $table->string('brand_slug')->nullable();
            $table->integer('brand_creator')->nullable();
            $table->integer('brand_status')->default(1);
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
        Schema::dropIfExists('brands');
    }
}
