<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('prodId');
            $table->bigInteger('catId')->unsigned()->index();
            $table->foreign('catId')->references('catId')->on('category');
            $table->string('nome',25);
            $table->string('marca',25);
            $table->string('processore',30);
            $table->float('dimDisplay');
            $table->string('risDisplay',100);         
            $table->integer('ram');  
            $table->integer('memoria'); 
            $table->string('schedaGraf'); 
            $table->string('fotocamera');
            $table->string('descShort',1000);
            $table->string('descLong',7000);
            $table->float('prezzo');
            $table->integer('scontoPerc');
            $table->tinyInteger('sconto');
            $table->text('immagine')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
