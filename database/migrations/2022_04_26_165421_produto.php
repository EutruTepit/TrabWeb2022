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
        Schema::table('produto', function (Blueprint $table) {
            $table->softDeletes();
            $table->id();
            $table->string('nome', 200);
            $table->string('descricao', 500);
            $table->float('preco', 14);
            $table->date('dataLancamento', 200);
            $table->unsignedBigInteger('idFornecedor');
            $table->foreign('idFornecedor')->references('id')->on('fornecedor');
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
        Schema::table('produto', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
