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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->enum('type', [1,2,3,4])->comment('1- admin, 2-staff , 3-customer, 4-user');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('otp');
            $table->timestamps('email_verified');
            $table->string('block');
            $table->string('status');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
