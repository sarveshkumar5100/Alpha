<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserContestsTable extends Migration
{
    public function up()
    {
        Schema::create('user_contests', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('contest_id')->index();
            $table->integer('score')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->unsignedInteger('created_at');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('updated_at')->nullable();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_contests');
    }
}
