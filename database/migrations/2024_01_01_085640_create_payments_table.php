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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            $table->string('Event')->nullable();
            $table->string('TransactionRef')->nullable();
            $table->json('Body')->nullable();
            $table->string('transaction_ref')->unique()->nullable();
            $table->string('amount')->nullable();
            $table->string('gateway_ref')->nullable();
            $table->string('transaction_status')->nullable();
            $table->string('email')->nullable();
            $table->string('merchant_id')->nullable();
            $table->string('currency')->nullable();
            $table->string('transaction_type')->nullable();
            $table->string('merchant_amount')->nullable();
            $table->string('customer_mobile')->nullable();
            $table->json('meta')->nullable();
            $table->json('payment_information')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('pan')->nullable();
            $table->string('plan')->nullable();
            $table->string('recurring_id')->nullable();
            $table->string('card_type')->nullable();
            $table->string('customer_ref')->nullable();
            $table->string('token_id')->nullable();
            $table->string('data')->nullable();


            // $table->string('Event');
            // $table->json('Body')->nullable();
            // $table->string('TransactionRef')->unique();
            // $table->json('amount')->nullable();
            // $table->json('gateway_ref')->nullable();
            // $table->json('transaction_status')->nullable();
            // $table->json('email')->nullable();
            // $table->json('merchant_id')->nullable();
            // $table->string('currency');
            // $table->json('transaction_type')->nullable();
            // $table->json('merchant_amount')->nullable();
            // $table->json('customer_mobile')->nullable();
            // $table->json('meta')->nullable();
            // $table->json('payment_information')->nullable();
            // $table->json('payment_type')->nullable();
            // $table->json('pan')->nullable();
            // $table->json('plan')->nullable();
            // $table->json('recurring_id')->nullable();
            // $table->json('card_type')->nullable();
            // $table->json('customer_ref')->nullable();
            // $table->json('token_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
