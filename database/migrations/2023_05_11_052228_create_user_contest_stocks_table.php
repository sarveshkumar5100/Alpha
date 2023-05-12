<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserContestStocksTable extends Migration
{
    public function up()
    {
        Schema::create('user_contest_stocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('stock_id');
            $table->unsignedBigInteger('stock_id');
            $table->unsignedBigInteger('contest_id');
            $table->decimal('stock_amount', 8, 2);
            $table->decimal('stock_open', 8, 2);
            $table->decimal('stock_close', 8, 2);
            $table->decimal('stock_change_amount', 8, 2);
            $table->decimal('stock_percent_change', 8, 2);
            $table->longText('stock_data');
            $table->tinyInteger('status')->default(1);
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by');
            $table->unsignedBigInteger('created_at')->nullable();
            $table->unsignedBigInteger('updated_at');
            $table->unique(['user_id', 'stock_id', 'contest_id']);
            $table->index(['user_id', 'stock_id', 'contest_id']);
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('user_contest_stocks');
    }
}
