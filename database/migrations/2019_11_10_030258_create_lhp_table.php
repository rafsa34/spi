<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLhpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lhp', function (Blueprint $table) {
           $table->increments('id');
            //
            $table->integer('bagian_id')->unsigned()->nullable();
            $table->foreign('bagian_id')->references('id')->on('bagian')->onDelete('cascade');
            //
            //$table->integer('jenis_monitor_id')->unsigned()->nullable();
            //$table->foreign('jenis_monitor_id')->references('id')->on('monitor')->onDelete('cascade');
            //
            $table->string('jenis_monitor')->nullable();
            $table->string('no_lhp')->nullable();
            $table->date('tgl_pemeriksaan')->nullable();
            $table->string('no_surat_direksi')->nullable();
            $table->date('tgl_surat_direksi')->nullable();
            $table->string('no_surat_penegasan')->nullable();
            $table->date('tgl_surat_penegaran')->nullable();
            $table->string('no_tindak_lanjut')->nullable();
            $table->date('tgl_tindak_lanjut')->nullable();
            $table->string('file')->nullable();
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
        Schema::dropIfExists('lhp');
    }
}
