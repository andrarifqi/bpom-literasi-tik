<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuisionerKepuasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuisioner_kepuasan', function (Blueprint $table) {
            $table->bigIncrements('id_kuisioner_kepuasan');
            $table->text('kuisioner_kepuasan');
            $table->string('tahun_kuisioner', '4');
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
        Schema::dropIfExists('kuisioner_kepuasan');
    }
}