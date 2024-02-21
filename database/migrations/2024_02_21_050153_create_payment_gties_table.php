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
        Schema::create('payment_gties', function (Blueprint $table) {
            $table->id();
            $table->string("bkash_status");
            $table->string("sslc_status");
            $table->string("nagad_status");
            $table->string("aamarpay_status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_gties');
    }
};
