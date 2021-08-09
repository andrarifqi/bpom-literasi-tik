<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponKepuasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respon_kepuasan', function (Blueprint $table) {
            $table->bigIncrements('id_respon_kepuasan');
            $table->bigInteger('id_user');
            $table->string('kuisioner_kepuasan');
            $table->string('tahun_kuisioner', '4');
            $table->string('respon_kepuasan');
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
        Schema::dropIfExists('respon_kepuasan');
    }
}