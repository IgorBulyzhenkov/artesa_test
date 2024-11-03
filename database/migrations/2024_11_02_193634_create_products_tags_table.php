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
        Schema::create('products_tags', function (Blueprint $table) {
            $table->foreignId('products_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('tags_id')->constrained('tags')->onDelete('cascade');
            $table->primary(['products_id', 'tags_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_tags');
    }
};
