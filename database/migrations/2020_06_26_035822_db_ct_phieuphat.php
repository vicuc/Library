<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbCtPhieuphat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_ct_phieuphat', function (Blueprint $table) {
            $table->increments('id');


            $table->text('li_do');

            $table->integer('id_phieuphat')->unsigned();
            $table->foreign('id_phieuphat')
                ->references('pp_id')
                ->on('db_phieuphat')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_ct_phieuphat');
    }
}
