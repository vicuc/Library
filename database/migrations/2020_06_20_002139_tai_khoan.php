<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaiKhoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tai_khoan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_user')->nullable();
            $table->string('ten_user');
            $table->boolean('gioi_tinh');


            $table->string('email');
            $table->string('password');
            $table->integer('trang_thai');
            $table->string('phone');


            $table->integer('level')->unsigned();
            $table->foreign('level')
                ->references('vt_id')
                ->on('db_vaitro')
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
        Schema::dropIfExists('tai_khoan');
    }
}
