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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('thumb', 255);
            $table->string('name_project');
            $table->text('slug');
            $table->float('price');
            $table->string('value');
            $table->string('unit');
            $table->text('content');
            $table->text('location');
            $table->text('convince');
            $table->text('decor');
            $table->text('payment');
            $table->text('place');
            $table->integer('is_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
