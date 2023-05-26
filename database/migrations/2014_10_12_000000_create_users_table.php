<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            // $table->integer('bank card number',10);

            // $table->string('first name');//new
            // $table->string('last name');
            // $table->string('address');
            // $table->date('date_of_birth');
            // $table->string('phone_number');
            $table->integer('branch')->default('001');
            $table->integer('routing_number')->default('10012');

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->integer('admin')->default('0');
            // $table->integer('pin');//new

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
