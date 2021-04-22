<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSgoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgo', function (Blueprint $table) {
            $table->id();
            $table->string('cod_vend',6)->nullable();
            $table->string('nome', 255)->nullable(false);
            $table->string('cpf',11)->nullable(false);
            $table->string('status', 50)->nullable(false);
            $table->string('caixa',3)->nullable();
            $table->string('login_sistema',60)->nullable();
            $table->string('setor',60)->nullable();
            $table->string('unidade',150)->nullable(false);
            $table->string('gestor1',255)->nullable();
            $table->string('gestor2',255)->nullable();
            $table->string('gestor3',255)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sgo');
    }
}
