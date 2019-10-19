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
            $table->unsignedBigInteger('user_id');
            $table->integer('height');
            $table->integer('weight');
            $table->integer('bmi');
            $table->integer('year');
            $table->integer('semester');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('CASCADE');
            
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