<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MsAnak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_anak', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('user_id')->references('id')->on('ms_user');
            $table->text('nama');
            $table->char('jk');
            $table->date('tgl_lahir');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
