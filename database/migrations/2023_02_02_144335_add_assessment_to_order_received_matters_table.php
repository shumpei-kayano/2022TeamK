<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAssessmentToOrderReceivedMattersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_received_matters', function (Blueprint $table) {
            $table->integer('assessment')->nullable()->after('adoption_flg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_received_matters', function (Blueprint $table) {
            //
        });
    }
}
