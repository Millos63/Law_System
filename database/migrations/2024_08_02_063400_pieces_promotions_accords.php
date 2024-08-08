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
        Schema::create('pieces_promotions_accords', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_piece');
            $table->string('promotion_file')->nullable();
            $table->date('promotion_date')->nullable();
            $table->string('promotion_description')->nullable();
            $table->string('accord_file')->nullable();
            $table->date('accord_date')->nullable();
            $table->string('accord_description')->nullable();
            $table->timestamps();

            $table->foreign('id_piece')->references('id')->on('pieces')->onDelete('cascade');
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
