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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('model_id')->nullable();
            $table->unsignedBigInteger('cabinet_id')->nullable();
            $table->unsignedBigInteger('inventory_number');
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('model_id')->references('id')->on('models')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreign('cabinet_id')->references('id')->on('cabinets')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
