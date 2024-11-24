<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGejalasTable extends Migration
{
    public function up()
    {
        Schema::create('gejalas', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('nama_gejala'); // Kolom nama_gejala
            $table->text('keterangan')->nullable(); // Kolom keterangan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('gejalas');
    }
}
