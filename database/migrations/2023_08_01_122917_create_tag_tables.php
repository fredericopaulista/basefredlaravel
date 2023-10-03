<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->longText('briefDescription')->nullable();
            $table->longText('body');
            $table->integer('visible')->default('1');
            $table->timestamps();
        });


    }

    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
