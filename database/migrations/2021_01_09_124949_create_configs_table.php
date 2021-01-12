<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('mypath')->default('http://127.0.0.1:8000/');
            $table->string('email')->default('geral@limasoft.pt');
            $table->string('telefone')->default('936453434');
            $table->string('emailsec')->nullable();
            $table->string('telefonesec')->nullable();
            $table->string('shortname')->default('Limasoft');
            $table->string('longname')->nullable();
            $table->string('morada')->nullable();
            $table->string('cpostal')->nullable();
            $table->string('localidade')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagran')->nullable();
            $table->string('skype')->nullable();
            $table->string('linkedin')->nullable();
            //CHAMADA HORIZONTAL
            $table->string('chtitp1')->default('Temos mais de ');
            $table->string('chtitp2')->default('1.000 clientes');
            $table->string('chtitp3')->default('registados');
            $table->string('chtexto')->default('Junte-se a nós agora submetendo uma proposta de inscrição');
            $table->string('chtxtlink')->default('Preencher proposta');
            $table->string('chlink')->default('#');
            //SERVIÇOS
            $table->string('servtitp1')->default('Os nossos ');
            $table->string('servtitp2')->default('Serviços');
            //PORTEFOLIOS
            $table->string('pttitp1')->default('Alguns dos nossos');
            $table->string('pttitp2')->default('trabalhos recentes');
            //CLIENTES
            $table->string('cltitp1')->default('Alguns dos');
            $table->string('cltitp2')->default('nossos parceiros');
            $table->string('cltexto')->default('A base para o sucesso!');
            //FOOTER
            $table->string('newslttit')->default('Newsletter');
            $table->string('newslttexto')->default('Fique a par das nossas novidades');

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
        Schema::dropIfExists('configs');
    }
}
