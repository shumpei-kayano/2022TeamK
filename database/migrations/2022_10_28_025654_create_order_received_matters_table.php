<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderReceivedMattersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_received_matters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('matter_id');
            $table->integer('user_id');
            $table->integer('occupation_id');
            $table->integer('reward');
            $table->string('deadline');
            $table->string('rank');
            $table->integer('experience');
            $table->date('order_date');
            $table->date('achievement_date');
            $table->integer('adoption_flg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_received_matters');
    }
}
