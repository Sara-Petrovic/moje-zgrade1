<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZgradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zgrade', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('adresa');
            $table->string('tekuci_racun');
            $table->string('banka');
            $table->integer('broj_stanova');
            $table->integer('user_id')->unsigned()->index(); //ovako se definise spoljni kljuc ka tabeli user
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zgrade');
    }
}
