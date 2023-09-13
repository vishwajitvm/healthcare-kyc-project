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
        Schema::create('maacs', function (Blueprint $table) {
            $table->id();
            $table->string('kyc_id');
            $table->string('distributor_name');
            $table->string('region');
            $table->string('drs_name');
            $table->string('drs_mobile');
            $table->string('bill_number');
            $table->string('bill_date');
            $table->string('bill_amount');
            $table->string('payment_received_date');
            $table->string('goods_dispatch_date');
            $table->string('manager_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maacs');
    }
};
