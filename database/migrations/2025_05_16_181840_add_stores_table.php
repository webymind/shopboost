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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('address_landmark')->nullable();
            $table->string('pin_location')->nullable();
            $table->string('phone');
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->string('category');
            $table->text('hours')->nullable();
            $table->json('social_links')->nullable();
            $table->json('media_links')->nullable();
            $table->json('payment_methods')->nullable();
            $table->json('services')->nullable();
            $table->json('images')->nullable();
            $table->string('request_type')->nullable();
            $table->string('status')->default('new');
            $table->timestamps();
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
