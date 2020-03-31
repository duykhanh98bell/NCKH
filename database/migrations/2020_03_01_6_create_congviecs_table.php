<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongviecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('congviecs', function (Blueprint $table) {
            $table->Increments('id');
            $table->UnsignedInteger('id_da');
            $table->foreign('id_da')->references('id')->on('duans');
            $table->UnsignedInteger('id_nv');
            $table->foreign('id_nv')->references('id')->on('users');
            $table->string('name');
            $table->text('mota');
            $table->string('image');
            $table->integer('uutien');
            $table->string('status');
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
        Schema::dropIfExists('congviecs');
    }
}
