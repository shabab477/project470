<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('address');
            $table->double('price', 10, 3);
            $table->decimal('latitude', 5, 2)->default(-190);
            $table->decimal('longitude', 5, 2)->default(-190);
            $table->string('location');
            $table->integer('by')->unsigned();
            $table->foreign('by')->references('id')->on('users');
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
        Schema::dropIfExists('ads');
    }
}
