<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbBansao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_bansao', function (Blueprint $table) {
            $table->increments('bs_id');

            $table->string('bs_code')->nullable();

            $table->string('bs_name');
            $table->integer('bs_qty');

            
            $table->integer('id_sach')->unsigned();
            $table->foreign('id_sach')
                ->references('s_id')
                ->on('sach')
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
        Schema::dropIfExists('db_bansao');
    }
}
