<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temuan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pic')->nullable();
            $table->integer('tenggang_waktu')->nullable();
            $table->integer('nilai_rupiah')->nullable();
            $table->string('status')->nullable();
            $table->string('isi_temuan')->nullable();
            //
            $table->integer('jenis_temuan_id')->unsigned()->nullable();
            $table->foreign('jenis_temuan_id')->references('id')->on('jenis_temuan')->onDelete('cascade');
            //
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
        Schema::dropIfExists('temuan');
    }
}
