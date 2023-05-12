<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('short_code')->unique()->index();
            $table->unsignedInteger('spots');
            $table->unsignedInteger('entry_price');
            $table->unsignedInteger('discounted_price');
            $table->unsignedInteger('discount')->nullable();
            $table->unsignedInteger('start_date');
            $table->unsignedInteger('end_date');
            $table->unsignedInteger('announce_time')->nullable();
            $table->string('image_icon')->nullable();
            $table->enum('contest_type', ['One on One', 'Predict Play', 'Majority Wins']);
            $table->tinyInteger('status')->default(1);
            $table->longText('description')->nullable();
            $table->unsignedInteger('created_at');
            $table->unsignedInteger('updated_at')->nullable();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
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
        Schema::dropIfExists('contests');
    }
}
