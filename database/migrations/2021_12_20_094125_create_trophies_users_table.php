<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrophiesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trophies_users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('trophy_id');
            // $table->foreign('trophy_id')->references('id')->on('trophies')->onDelete('cascade');
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
        Schema::dropIfExists('trophies_users');
    }
}
