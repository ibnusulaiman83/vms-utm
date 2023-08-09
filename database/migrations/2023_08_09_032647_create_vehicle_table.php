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
        Schema::create('vehicles', function (Blueprint $table) {
           $table->id();
           $table->string('brand');
           $table->string('model');
           $table->string('colour');
           $table->integer('year')->nullable(true);
           $table->integer('status');
           $table->timestamp('created_at')->nullable(true);
           $table->timestamp('updated_at')->nullable(true);
           $table->timestamp('deleted_at')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
