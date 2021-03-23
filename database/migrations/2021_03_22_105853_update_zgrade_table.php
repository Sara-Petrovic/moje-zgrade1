<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateZgradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zgrade', function (Blueprint $table) {
            $table->renameColumn('adresa', 'adresa_zgrade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('zgrade', function (Blueprint $table) {
            $table->renameColumn('adresa_zgrade', 'adresa');
        });
    }
}
