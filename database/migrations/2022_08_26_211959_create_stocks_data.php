<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks_data', function (Blueprint $table) {
             $table->id();
             $table->string("symbol",225);
            $table->double("open",225,2);
            $table->double("high",225,2);
            $table->double("low",225,2);
            $table->double("price",225,2);
            $table->unsignedBigInteger("volume")->nullable();
            $table->string("latest_trading_day",225);
            $table->double("previous_close",225,2);
            $table->double("change",225,2);
            $table->double("change_percent",225,2);
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
        Schema::dropIfExists('stocks_data');
    }
};
