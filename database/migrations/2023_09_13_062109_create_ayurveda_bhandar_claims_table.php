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
        Schema::create('ayurveda_bhandar_claims', function (Blueprint $table) {
            $table->id();
            $table->string('kyc_id')->nullable();
            $table->string('name_of_ss')->nullable();
            $table->string('name_of_ayurveda_bhandar')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('name_of_distributor')->nullable();
            $table->string('bill_number')->nullable();
            $table->string('bill_date')->nullable();
            $table->string('nrv_value')->nullable();
            $table->string('claim_amount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ayurveda_bhandar_claims');
    }
};
