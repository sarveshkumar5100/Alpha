<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contest_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('amount');
            $table->tinyInteger('status')->default(1);
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('created_at');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('updated_at')->nullable();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

