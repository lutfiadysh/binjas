<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TrTkj extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_tkj', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('user_id')->references('id')->on('ms_users');
            $table->integer('Lari_12_Menit');
            $table->integer('Pull_Up_Chinning');
            $table->integer('Sit_Up');
            $table->integer('Push_Up');
            $table->integer('Shuttle_Run');
            $table->integer('tahun');
            $table->integer('semester');
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
