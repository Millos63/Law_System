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
        Schema::table('judgeds', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('id_matter')->nullable()->after('judged_number');

            $table->foreign('id_matter')->references('id')->on('matters')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jugeds', function (Blueprint $table) {
            //
        });
    }
};
