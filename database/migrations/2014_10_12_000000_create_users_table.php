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
        Schema::enableForeignKeyConstraints();
        
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->string('account_type');
            $table->string('account_number')->unique();
            $table->string('due_date');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('id_payment_method')->unique();
            $table->timestamps();
            $table->foreign('id_payment_method')->references('id')->on('payment_methods');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('payment_method');
    }
};
