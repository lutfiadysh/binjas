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
            $table->unsignedBigInteger('user_id');
            $table->integer('running');
            $table->integer('pull_up');
            $table->integer('sit_up');
            $table->integer('push_up');
            $table->integer('shuttle_run');
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