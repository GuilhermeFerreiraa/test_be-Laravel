<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecreateUsersTable extends Migration
{
    public function up()
    {

        Schema::dropIfExists('users');


        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('document')->unique();
            $table->string('name');
            $table->string('lastName');
            $table->date('dateOfBirth');
            $table->string('email')->unique();
            $table->enum('gender', ['male', 'female', 'other']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
