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
        Schema::create('pieces_files', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_piece');
            $table->string('start_file');
            $table->string('start_description')->nullable();
            $table->date('start_date')->nullable();
            $table->string('finish_file')->nullable();
            $table->string('finish_description')->nullable();
            $table->date('finish_date')->nullable();

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
