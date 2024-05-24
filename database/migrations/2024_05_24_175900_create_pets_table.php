<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->unsignedBigInteger('raca_id');
            $table->text('descricao');
            $table->string('foto')->nullable();
            $table->integer('idade');
            $table->unsignedBigInteger('ong_id');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('raca_id')->references('id')->on('racas')->onDelete('cascade');
            $table->foreign('ong_id')->references('id')->on('ongs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
};
