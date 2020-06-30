<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbCtPhieutra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_ct_phieutra', function (Blueprint $table) {
            $table->increments('id');

            $table->date('ngay_tra');


            $table->integer('id_phieumuon')->unsigned();
            $table->foreign('id_phieumuon')
                ->references('pm_id')
                ->on('db_phieumuon')
                ->onDelete('cascade');

            $table->integer('id_phieutra')->unsigned();
            $table->foreign('id_phieutra')
                ->references('pt_id')
                ->on('db_phieutra')
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
        Schema::dropIfExists('db_ct_phieutra');
    }
}
