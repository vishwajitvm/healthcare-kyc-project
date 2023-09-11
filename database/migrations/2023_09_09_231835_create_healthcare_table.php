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
        Schema::create('healthcare', function (Blueprint $table) {
            $table->id();
            $table->string('mr_name');
            $table->string('asm_name');
            $table->string('rsm_name');
            $table->string('hq_name');
            $table->string('choice_health')->comment('MAAC, Ayurveda, Mak Loyalty, etc');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('healthcare');
    }
};
