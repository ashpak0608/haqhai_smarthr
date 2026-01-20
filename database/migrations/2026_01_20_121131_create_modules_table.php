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
    Schema::create('modules', function (Blueprint $table) {
        $table->id();
        $table->string('module_name'); // e.g., "Masters"
        $table->string('icon')->nullable(); // e.g., "ti ti-database"
        $table->integer('sequence')->default(0); // For ordering menus
        $table->integer('status')->default(0); // 0: Active, 1: Inactive
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
