<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->unsignedBigInteger('amount');
            $table->longText('gateway_data')->nullable();
            $table->enum('payment_source', ['Razorpay', 'other']);
            $table->enum('status', ['pending', 'completed', 'failed']);
            $table->enum('type', ['gateway', 'debit', 'credit']);
            $table->text('remarks')->nullable();
            $table->unsignedBigInteger('created_at')->nullable();
            $table->unsignedBigInteger('updated_at')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}

