<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolusisTable extends Migration
{
    public function up()
    {
        Schema::create('solusis', function (Blueprint $table) {
            $table->foreignId('kerusakan_id')->nullable()->constrained('kerusakans')->onDelete('cascade')->change();
            $table->id(); // Kolom id
            $table->string('nama_solusi'); // Kolom nama_solusi
            $table->text('langkah_solusi'); // Kolom langkah_solusi
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('solusis');
    }
}
