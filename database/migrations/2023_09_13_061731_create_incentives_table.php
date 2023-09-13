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
        Schema::create('incentives', function (Blueprint $table) {
            $table->id();
            $table->string('kyc_id')->nullable();
            $table->string('mr_name')->nullable();
            $table->string('hq')->nullable();
            $table->string('region')->nullable();
            $table->string('distributor_name')->nullable();
            $table->string('bill_number')->nullable();
            $table->string('bill_date')->nullable();
            $table->string('nrv_value')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incentives');
    }
};
