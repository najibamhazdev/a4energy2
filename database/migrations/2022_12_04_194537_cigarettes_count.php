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
        Schema::create('cigarettes_counts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cigarette_id')->unsigned();
            $table->bigInteger('dailycount_id')->unsigned();
            $table->integer('qty');
            $table->timestamps();
            $table->foreign('cigarette_id')->references('id')->on('cigarettes');
            $table->foreign('dailycount_id')->references('id')->on('daily_counts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
