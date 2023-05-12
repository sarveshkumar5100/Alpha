<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCreditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_credit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('txn_id');
            $table->enum('type', ['debit', 'credit']);
            $table->unsignedInteger('closing_balance');
            $table->unsignedInteger('amount');
            $table->text('remarks')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('created_at');
            $table->unsignedBigInteger('updated_at')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_credit');
    }
}
