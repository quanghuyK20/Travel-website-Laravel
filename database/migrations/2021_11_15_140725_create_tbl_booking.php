<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_booking', function (Blueprint $table) {
            $table->increments('booking_id');
            $table->string('customer_name');
            $table->string('buy_in_date');
            $table->string('package_name');
            $table->string('total');
            $table->string('email');
            $table->string('fromdate');
            $table->string('todate');
            $table->string('note');
            $table->int('status');
            $table->string('cancelby');
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
        Schema::dropIfExists('tbl_booking');
    }
}
