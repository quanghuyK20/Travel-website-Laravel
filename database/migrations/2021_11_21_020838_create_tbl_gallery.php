<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblGallery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_gallery', function (Blueprint $table) {
            $table->increments('gallery_id');
            $table->string('location');
            $table->string('location_infor');
            $table->string('image_gallery');
            $table->string('gallery_mt1');
            $table->string('gallery_mt2');
            $table->string('gallery_mt3');
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
        Schema::dropIfExists('tbl_gallery');
    }
}
