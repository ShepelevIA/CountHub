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
        Schema::create('furniture', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('furniture_type_id')->nullable();
            $table->unsignedBigInteger('cabinet_id')->nullable();
            $table->unsignedBigInteger('inventory_number');
            $table->string('color');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('furniture_type_id')->references('id')->on('furniture_types')
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
        Schema::dropIfExists('furniture');
    }
};
