<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duans', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name_duan');
            $table->string('ma_duan')->nullable();
            $table->text('tomtat');
            $table->text('chitiet')->nullable();
            $table->date('deadline')->nullable();
            $table->date('deadline_now')->nullable();
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
        Schema::dropIfExists('duans');
    }
}
