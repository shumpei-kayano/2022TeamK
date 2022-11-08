<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMattersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->integer('prefectures_id');
            $table->text('matter_name');
            $table->integer('development_language_id1');
            $table->integer('development_language_id2');
            $table->integer('development_language_id3');
            $table->integer('development_language_id4');
            $table->integer('occupation_id');
            $table->text('remarks');
            $table->integer('success_fee');
            $table->date('deadline');
            $table->string('rank');
            $table->integer('number_of_person');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matters');
    }
}
