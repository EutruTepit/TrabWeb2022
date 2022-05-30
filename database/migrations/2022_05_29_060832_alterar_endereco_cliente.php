<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cliente', function(Blueprint $table){
            $table->dropColumn('endereco');
        });

        Schema::table('cliente', function (Blueprint $table) {
            $table->text("cep");
            $table->longText("logradouro");
            $table->text("complemento")->nullable();
            $table->integer("numero")->nullable();
            $table->text("bairro");
            $table->text("localidade");
            $table->string("uf", 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cliente', function (Blueprint $table) {
            $table->longText('endereco');
            $table->dropColumn(["cep", "logradouro", "complemento", "numero", "bairro", "localidade", "uf"]);
        });
    }
};
