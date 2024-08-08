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
        Schema::create('pieces', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_expedient');
            $table->string('piece_type');
            $table->string('piece_number');
            $table->string('review_authority')->nullable();
            $table->string('review_number')->nullable();
            $table->string('complaint_authority')->nullable();
            $table->string('complaint_number')->nullable();
            $table->string('observations')->nullable();
            $table->timestamps();

            $table->foreign('id_expedient')->references('id')->on('expedients')->onDelete('cascade');
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
