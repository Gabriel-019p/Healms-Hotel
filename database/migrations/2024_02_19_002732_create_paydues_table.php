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
        Schema::create('paydues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('police_id')->constrained('police');
            $table->string('dues_type'); // Changed column name from 'dues-type' to 'dues_type'
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('role');
            $table->string('amount');
            $table->string('account_name')->nullable(); // Changed column name from 'account-name' to 'account_name'
            $table->string('account_number')->nullable();
            $table->string('bank')->nullable();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paydues');
    }
};
