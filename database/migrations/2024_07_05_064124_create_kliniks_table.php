<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kliniks', function (Blueprint $table) {
            $table->id(); // Use default 'id' as the primary key
            $table->string('nama');
            $table->text('alamat');
            $table->string('nomor_telepon');
            $table->time('jam_buka');
            $table->time('jam_tutup');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('kliniks');
    }
};
