<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id');
            $table->integer('recipient_id');
            // $table->integer('contacts_user_id_foreign')->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('recipient_id')->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->decimal('amount',9,2);
            $table->string('description');
            $table->string('reversable'); 
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
        Schema::dropIfExists('transactions');
    }
}
