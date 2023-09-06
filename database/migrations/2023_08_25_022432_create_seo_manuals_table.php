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
        Schema::create('seo_manuals', function (Blueprint $table) {
            $table->id();
            $table->string('seo_title');
            $table->string('seo_url');
            $table->string('seo_description');
            $table->string('seo_og_title');
            $table->string('seo_og_image');
            $table->string('seo_og_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_manuals');
    }
};
