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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('taxpayer_name');
            $table->string('agency_name');
            $table->string('revenue_item_name');
            $table->decimal('rate', 10, 2);
            $table->string('transaction_ref');
            // $table->foreignId('taxpayer_id')->constrained('taxpayers'); // assuming 'taxpayers' is the correct table name
            // $table->foreignId('agency_id')->constrained('agencies'); // assuming 'agencies' is the correct table name
            // $table->foreignId('revenue_item_id')->constrained('revenue_items'); // assuming 'revenue_items' is the correct table name
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
