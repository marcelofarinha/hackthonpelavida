<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCepTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'cep';

    /**
     * Run the migrations.
     * @table cep
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('IDCep');
            $table->unsignedBigInteger('IDCidade');
            $table->string('CEP', 8);
            $table->string('Logradouro', 200);
            $table->string('Coordenada', 45)->nullable()->default(null);
            $table->string('Bairro', 200)->nullable()->default(null);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at') ->nullable();
            $table->timestamp('deleted_at') ->nullable();

            $table->index(["IDCidade"], 'fk_Cep_Cidade1_idx');


            $table->foreign('IDCidade', 'fk_Cep_Cidade1_idx')
                ->references('IDCidade')->on('cidade')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
