<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('expedients', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('expedient_number');
            $table->date('expedient_date');
            $table->bigInteger('id_client')->unsigned();
            $table->string('authority')->nullable();
            $table->bigInteger('id_judged')->nullable()->unsigned();
            $table->bigInteger('id_judment')->nullable()->unsigned();
            $table->string('expedient_link')->nullable();
            $table->string('counter_party');
            $table->string('judicial_district')->nullable();
            $table->string('touch_number')->nullable(); 
            $table->string('touch_room')->nullable();
            $table->string('room_number')->nullable();
            $table->string('protection_number')->nullable();
            $table->string('protection_authority')->nullable();
            $table->timestamps();

            $table->foreign('id_client')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('id_judged')->references('id')->on('judgeds');
            $table->foreign('id_judment')->references('id')->on('judments');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
