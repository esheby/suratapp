<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSk2022sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sk2022s', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_surat');
            $table->string('nomor')->nullable();
            $table->string('kepada');
            $table->string('perihal');
            $table->string('konseptor');
            $table->string('keterangan');
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
        Schema::dropIfExists('sk2022s');
    }
}
