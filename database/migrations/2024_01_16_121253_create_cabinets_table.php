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
        Schema::create('cabinets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_cabinet_id')->nullable();
            $table->string('title');
            $table->unsignedBigInteger('number_cabinet');
            $table->unsignedBigInteger('floor')->nullable();
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('type_cabinet_id')->references('id')->on('cabinet_types')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreign('floor')->references('id')->on('floors')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabinets');
    }
};
