<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('password');
            $table->text('nama');
            $table->text('pangkat');
            $table->date('tgl_lahir');
            $table->text('nip');
            $table->text('kesatuan');
            $table->text('gol');
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
