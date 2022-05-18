<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bilgisayarlar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bilgisayarlar', function (Blueprint $table) {
            $table->id();
            $table->string('marka');
            $table->string('model');
            $table->string('islemci');
            $table->string('ram');
            $table->string('ekrankarti');
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
        //
    }
}
