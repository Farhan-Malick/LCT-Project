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
        Schema::table('ticket_listings', function (Blueprint $table) {
            $table->string('simple_pdfForMobileTicket')->after('simple_pdf')->nullable();
            $table->string('simple_pdfForPaper')->after('simple_pdf')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ticket_listings', function (Blueprint $table) {
            //
        });
    }
};
