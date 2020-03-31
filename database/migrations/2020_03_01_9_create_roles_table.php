<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('level');
            $table->timestamps();
        });
        Schema::create('user_roles', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->timestamps();
        });
        Schema::create('permisions', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('title')->nullable();
            $table->timestamps();
        });
        Schema::create('role_permision', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->unsignedInteger('per_id');
            $table->foreign('per_id')->references('id')->on('permisions');
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
        Schema::dropIfExists('roles');
        Schema::dropIfExists('permisions');
        Schema::dropIfExists('role_permision');
    }
}
