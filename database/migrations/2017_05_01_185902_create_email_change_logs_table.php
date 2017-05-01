<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailChangeLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_change_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('old_email');
            $table->string('new_email');
            $table->string('confirmationToken');
            $table->enum('status', ['A', 'C'])->default('A');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email_change_logs');
    }
}
