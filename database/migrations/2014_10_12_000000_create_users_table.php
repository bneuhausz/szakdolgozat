<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('weight')->nullable();
            $table->integer('height')->nullable();
            $table->float('bench_1rm', 4, 2)->nullable();
            $table->float('squat_1rm', 4, 2)->nullable();
            $table->float('deadlift_1rm', 4, 2)->nullable();
            $table->float('ohp_1rm', 4, 2)->nullable();
            $table->string('password');
            $table->boolean('verified')->default('0');
            $table->string('verificationToken')->nullable();
            $table->string('language');
            $table->boolean('admin')->default('0');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
