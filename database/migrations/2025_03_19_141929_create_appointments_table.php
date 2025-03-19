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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time');
            $table->string('type');
            $table->boolean('status');
            $table->timestamps();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('clinic_id')->constrained();
            $table->foreignId('doctor_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            $table->dropForeign(['clinic_id']);
            $table->dropColumn('clinic_id');
            $table->dropForeign(['doctor_id']);
            $table->dropColumn('doctor_id');
        });
        Schema::dropIfExists('appointments');
        
    }
};
