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
        Schema::create('vehicle_rents', function (Blueprint $table) {
            $table->id();
           $table->integer('user_id')->nullable(false);
           $table->integer('vehicle_id')->nullable(false);
           $table->decimal('price', 8, 2)->nullable(false);
           $table->timestamp('start_date')->nullable(true);
           $table->timestamp('end_date')->nullable(true);
           $table->integer('status')->nullable(false);
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
        Schema::dropIfExists('vehicle_rents');
    }
};
