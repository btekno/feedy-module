<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFdResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fd_responses', function (Blueprint $table) {
            $table->id();
            $table->integer('campaign_id')->unsigned()->nullable();

            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->text('message')->nullable();

            $table->integer('rate')->nullable();
            $table->string('ip')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('fd_responses');
    }
}
