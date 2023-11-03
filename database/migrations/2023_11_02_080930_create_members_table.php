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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->tinyInteger('is_male');
            $table->string('place');
            $table->string('clb_name');
            $table->string('curent_point');
            $table->string('change_point');
            $table->tinyInteger('is_guest');
            $table->string('ability');
            $table->string('phone');
            $table->string('email');
            $table->string('nickname');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
