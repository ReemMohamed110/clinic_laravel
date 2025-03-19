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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('gender');
            $table->text('image')->nullable();
            $table->string('phone');
            $table->foreignId('major_id')->constrained;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {Schema::table('doctors', function (Blueprint $table) {
        $table->dropForeign(['major_id']);
        $table->dropColumn('major_id');
    });
        Schema::dropIfExists('doctors');
        
    }
};
