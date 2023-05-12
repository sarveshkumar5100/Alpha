<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestPrizesTable extends Migration
{
    public function up()
    {
        Schema::create('contest_prizes', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('contest_id')->index();
            $table->unsignedInteger('prize_value');
            $table->unsignedInteger('start_range')->nullable();
            $table->unsignedInteger('end_range')->nullable();
            $table->unsignedInteger('created_at');
            $table->unsignedInteger('updated_at')->nullable();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contest_prizes');
    }
}

