<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basics', function (Blueprint $table) {
            $table->bigIncrements('basic_id');
            $table->string('basic_title')->nullable();
            $table->string('basic_subtitle')->nullable();
            $table->string('basic_logo')->nullable();
            $table->string('basic_favicon')->nullable();
            $table->string('basic_slug')->nullable();
            $table->integer('basic_status')->default(1);
            $table->timestamps();
        });

        DB::table('basics')->insert(
            array(
                'basic_title' => '247beauty',
                'basic_subtitle' => '247beauty',
            )
        );
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basics');
    }
}
