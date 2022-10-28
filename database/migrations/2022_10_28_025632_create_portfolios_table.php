<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('tel');
            $table->string('educational_background');
            $table->integer('development_language_id1');
            $table->integer('development_year1');
            $table->integer('development_language_id2');
            $table->integer('development_year2');
            $table->integer('development_language_id3');
            $table->integer('development_year3');
            $table->integer('development_language_id4');
            $table->integer('development_year4');
            $table->integer('development_language_id5');
            $table->integer('development_year5');
            $table->text('self_pr');
            $table->date('birthday');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
}
