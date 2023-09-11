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
        Schema::create('kyc_submission', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kyc_id');
            $table->enum('status', ['submitted', 'approved', 'rejected'])->default('submitted');
            $table->timestamps();

            // Define a foreign key constraint
            $table->foreign('kyc_id')->references('id')->on('doctor_kyc')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kyc_submission');
    }
};
