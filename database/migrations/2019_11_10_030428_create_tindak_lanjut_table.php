<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTindakLanjutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tindak_lanjut', function (Blueprint $table) {
            $table->increments('id');
            //
            $table->integer('temuan_id')->unsigned()->nullable();
            $table->foreign('temuan_id')->references('id')->on('temuan')->onDelete('cascade');
            //
            $table->string('status')->nullable();
            $table->text('isi_tindak')->nullable();
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
        Schema::dropIfExists('tindak_lanjut');
    }
}
