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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()
            ->onDelete('cascade');
            $table->string('business_name');
            $table->string('business_number');
            $table->enum('business_type', ['digital', 'physical'])
            ->default('physical');
            $table->string('listing_id')->nullable();
            $table->string('property_type');
            $table->unsignedBigInteger('category_id');
            $table->text('description');
            $table->string('transaction_type');
            $table->text('address')->nullable();
            $table->double('price');
            $table->double('profit');
            $table->double('margin');
            $table->unsignedBigInteger('age');
            $table->unsignedBigInteger('views')->default(0);
            $table->enum('verification_status', ['verified', 'unverified'])
            ->default('unverified');
            $table->enum('status', ['review','approved','rejected'])
            ->default('review');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
