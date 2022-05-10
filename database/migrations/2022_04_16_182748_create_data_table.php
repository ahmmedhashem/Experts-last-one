<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('createra_id')->unsigned();
            $table->integer('activity_id')->unsigned()->nullable();
            $table->integer('mission_id')->unsigned()->nullable();
            $table->integer('rule_id')->unsigned()->nullable();
            $table->string('name');
            $table->boolean('is_active');
            $table->timestamps();
            $table->unique(['activity_id', 'mission_id']);

            $table->foreign('createra_id')->references('id')->on('main_criterias')->onDelete('cascade');
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');
            $table->foreign('mission_id')->references('id')->on('missions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datas');
    }
}
