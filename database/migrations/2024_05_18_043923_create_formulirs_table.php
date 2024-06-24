<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('gender');
            $table->date('birthdate');
            $table->text('address');
            $table->string('asalsekolah');
            $table->string('nisn');
            $table->string('nilai');
            $table->string('kk');
            $table->string('package');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('nik_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('nik_ibu');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('formulirs');
    }
};
