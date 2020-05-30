<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('cognome');
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('residenza',20)->nullable();
            $table->date('nascita')->nullable();
            $table->string('occupazione',20)->nullable();
            $table->string('username',20);
            $table->string('password');
            $table->string('ruolo',10)->default('user');
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
