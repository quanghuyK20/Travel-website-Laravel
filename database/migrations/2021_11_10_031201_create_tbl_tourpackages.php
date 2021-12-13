<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTourpackages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tourpackages', function (Blueprint $table) {
            $table->Increments('package_id');
            $table->string('package_name');
            $table->string('package_type');
            $table->string('package_location');
            $table->string('package_price');
            $table->string('package_fetures');
            $table->string('package_Details');
            $table->string('package_Image');
            $table->string('package_Image1');
            $table->string('package_Image2');
            $table->string('package_Image3');
            $table->string('package_Image4');
            $table->string('mota1');
            $table->string('mota2');
            $table->string('mota3');
            $table->string('mota4');
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
        Schema::dropIfExists('tbl_tourpackages');
    }
}
