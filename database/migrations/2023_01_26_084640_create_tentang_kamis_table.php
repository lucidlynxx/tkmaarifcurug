<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tentang_kamis', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('visi');
            $table->string('misi1');
            $table->string('misi2');
            $table->string('misi3');
            $table->string('fasilitas1');
            $table->string('fasilitas2');
            $table->string('fasilitas3');
            $table->string('fasilitas4');
            $table->string('fasilitas5');
            $table->string('fasilitas6');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('tentang_kamis');
    }
};
