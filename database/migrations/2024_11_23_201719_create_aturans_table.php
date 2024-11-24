<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAturansTable extends Migration
{
    public function up()
    {
        Schema::create('aturans', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->unsignedBigInteger('gejala_id'); // Kolom gejala_id
            $table->unsignedBigInteger('kerusakan_id'); // Kolom kerusakan_id
            $table->float('nilai_kepercayaan'); // Kolom nilai_kepercayaan
            $table->timestamps(); // Kolom created_at dan updated_at

            // Foreign key constraints
            $table->foreign('gejala_id')->references('id')->on('gejalas')->onDelete('cascade');
            $table->foreign('kerusakan_id')->references('id')->on('kerusakans')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('aturans');
    }
}
