<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'unidade';

    /**
     * Run the migrations.
     * @table unidade
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('IDUnidade');
            $table->unsignedBigInteger('IDCep');
            $table->string('Nome', 150)->nullable()->default(null);
            $table->string('CNES', 50)->nullable()->default(null);
            $table->string('Numero', 20)->nullable()->default(null);
            $table->string('Coordenada', 150)->nullable()->default(null);
            $table->string('Complemento', 100)->nullable()->default(null);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at') ->nullable();
            $table->timestamp('deleted_at') ->nullable();

            $table->index(["IDCep"], 'fk_UnidadeSintomatica_Cep1_idx');


            $table->foreign('IDCep', 'fk_UnidadeSintomatica_Cep1_idx')
                ->references('IDCep')->on('cep')
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
