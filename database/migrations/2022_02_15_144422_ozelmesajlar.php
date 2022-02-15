<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ozelmesajlar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ozelmesajlar', function (Blueprint $table) {
            $table->id();
            $table->string('gönderen');
            $table->string('alıcı');
            $table->string('baslik');
            $table->text('mesaj');
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
        Schema::dropIfExists('ozelmesajlar');
    }
}
