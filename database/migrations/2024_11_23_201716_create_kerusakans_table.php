<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerusakansTable extends Migration
{
    public function up()
    {
        Schema::create('kerusakans', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('nama_kerusakan'); // Kolom nama_kerusakan
            $table->text('deskripsi')->nullable(); // Kolom deskripsi
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('kerusakans');
    }
}
