<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodotti', function (Blueprint $table) {
            $table->bigIncrements('prodId');
            $table->bigInteger('catId')->unsigned()->index();
            $table->foreign('catId')->references('catId')->on('category');
            $table->string('nome',25);
            $table->string('marca',25);
            $table->float('dimDisplay');
            $table->string('risDisplay',10);         
            $table->integer('ram');  
            $table->integer('memoria'); 
            $table->string('schedaGraf'); 
            $table->string('fotocamera');
            $table->string('descShort',50);
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
        Schema::dropIfExists('prodotti');
    }
}
