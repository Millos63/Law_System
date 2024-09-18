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
        Schema::table('observations', function (Blueprint $table) {
            $table->string('observation')->nullable()->change();
            $table->string('instruction')->nullable()->change();
            $table->datetime('observation_date')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('observations', function (Blueprint $table) {
            $table->string('observation')->nullable(false)->change();
            $table->string('instruction')->nullable(false)->change();
            $table->date_time('observation_date')->nullable(false)->change();
            
        });
    }
};
