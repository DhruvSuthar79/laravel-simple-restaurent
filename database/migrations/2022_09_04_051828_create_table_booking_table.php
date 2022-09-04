<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_booking', function (Blueprint $table) {
            $table->id( 'booking_id' );
            $table->string( 'name' );
            $table->integer( 'phone' );
            $table->string( 'email', 50 );
            $table->integer( 'person_count' );
            $table->timestamp( 'booking_date' );
            $table->timestamps();
        });

        // Schema::table('table_booking', function (Blueprint $table){
        //     $table->date( 'booking_date' )->change();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_booking');
    }
}
