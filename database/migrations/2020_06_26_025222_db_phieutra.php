<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbPhieutra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_phieutra', function (Blueprint $table) {
            $table->increments('pt_id');

            $table->string('pt_code')->nullable();
            $table->integer('pt_status');

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
        Schema::dropIfExists('db_phieutra');
    }
}
