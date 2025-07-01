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
        Schema::create('agency_revenue_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agency_id')->constrained();
            $table->foreignId('revenue_item_id')->constrained();
            $table->decimal('rate', 12, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agency_revenue_item');
    }
};
