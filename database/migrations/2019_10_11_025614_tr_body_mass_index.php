<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TrBodyMassIndex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_body_massa_index', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('user_id')->references('id')->on('ms_users');
            $table->integer('Tinggi_Badan');
            $table->integer('Berat_Badan');
            $table->integer('Index_Massa_Tubuh');
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
