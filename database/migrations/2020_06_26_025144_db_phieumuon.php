<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbPhieumuon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_phieumuon', function (Blueprint $table) {
            $table->increments('pm_id');

            $table->string('pm_code')->nullable();
            $table->integer('pm_status');

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')
                ->references('id')
                ->on('tai_khoan')
                ->onDelete('cascade');
            
            

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
        Schema::dropIfExists('db_phieumuon');
    }
}
