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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('user_id');
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('about')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->text('contacts')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
