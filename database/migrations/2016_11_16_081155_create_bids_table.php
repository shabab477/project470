<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->increments('id');
            $table->double('cost', 10, 3);
            $table->unsignedInteger('bid_by');
            $table->unsignedInteger('bid_to');
            $table->string('message');
            $table->timestamps();

            $table->foreign('bid_by')
                                    ->references('id')
                                    ->on('users');
            $table->foreign('bid_to')
                                    ->references('id')
                                    ->on('houses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bids');
    }
}
