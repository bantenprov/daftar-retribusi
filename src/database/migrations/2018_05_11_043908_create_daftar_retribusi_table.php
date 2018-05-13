<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarRetribusiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_retribusies', function (Blueprint $table) {
            $table->increments('id');
			$table->uuid('uuid');
			$table->string('nama')->unique();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('opd_id')->unsigned()->nullable()->index();
			$table->string('opd_uuid', 36)->index();
			$table->integer('user_id')->unsigned()->index();
			$table->integer('user_update')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('daftar_retribusies');
    }
}
