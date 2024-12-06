<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAngsuranKeToAngsuranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('angsuran', function (Blueprint $table) {
            $table->integer('angsuran_ke')->after('kontrak_no')->comment('Nomor angsuran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('angsuran', function (Blueprint $table) {
            $table->dropColumn('angsuran_ke');
        });
    }
}
