<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('siswa');
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kelas')->constrained('kelas');
            $table->foreignId('id_spp')->constrained('spp');
            $table->string('nisn')->unique();
            $table->char('nis')->unique();
            $table->string('nama');
            $table->text('alamat');
            $table->string('no_telp');
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
        Schema::dropIfExists('siswas');
    }
}
