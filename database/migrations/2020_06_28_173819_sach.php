<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sach extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sach', function (Blueprint $table) {
            $table->increments('s_id');
            $table->string('s_code')->nullable();
            $table->string('s_name');
            $table->string('s_image');
            $table->text('s_desc');
            $table->integer('s_status');

            $table->integer('views')->nullable();

            $table->integer('s_cd')->unsigned();
            $table->foreign('s_cd')
                  ->references('cd_id')
                  ->on('chude')
                  ->onDelete('cascade');

            $table->integer('s_nxb')->unsigned();
            $table->foreign('s_nxb')
                ->references('nxb_id')
                ->on('db_nxb')
                ->onDelete('cascade');

            $table->integer('s_tacgia')->unsigned();
            $table->foreign('s_tacgia')
                    ->references('tg_id')
                    ->on('db_tacgia')
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
        Schema::dropIfExists('sach');
    }
}
