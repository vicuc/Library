<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbPhieuphat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_phieuphat', function (Blueprint $table) {
            $table->increments('pp_id');
            $table->string('pp_name');

            $table->string('pp_code')->nullable();

            $table->integer('pp_status');


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
        Schema::dropIfExists('db_phieuphat');
    }
}
