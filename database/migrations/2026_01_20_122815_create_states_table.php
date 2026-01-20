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
        Schema::create('states', function (Blueprint $table) {
    $table->id();
    $table->string('state_name');
    $table->integer('status')->default(0); // 0: Active, 1: Inactive
    $table->integer('created_by')->nullable();
    $table->integer('updated_by')->nullable();
    $table->softDeletes(); // Adds deleted_at column
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('states');
    }
};
