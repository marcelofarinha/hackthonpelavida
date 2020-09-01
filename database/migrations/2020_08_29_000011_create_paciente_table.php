<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'paciente';

    /**
     * Run the migrations.
     * @table paciente
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('IDPaciente');
            $table->unsignedBigInteger('IDUnidadeMonitoramento');
            $table->unsignedBigInteger('IDCep');
            $table->unsignedBigInteger('IDMembro')->nullable()->default(null);
            $table->string('Nome', 200);
            $table->string('Numero', 20)->nullable()->default(null);
            $table->date('DataNascimento');
            $table->string('Complemento', 200)->nullable()->default(null);
            $table->string('CNS', 20)->nullable()->default(null);
            $table->date('DataPrimeiraAvaliacao')->nullable()->default(null);
            $table->date('DataObito')->nullable()->default(null);
            $table->date('DataSintoma')->nullable()->default(null);
            $table->string('Coordenada', 50)->nullable()->default(null);
            $table->string('MonitoradoSN', 1)->nullable()->default(null);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at') ->nullable();
            $table->timestamp('deleted_at') ->nullable();

            $table->index(["IDCep"], 'fk_Paciente_Cep1_idx');

            $table->index(["IDMembro"], 'fk_Paciente_Paciente');


            $table->foreign('IDCep', 'fk_Paciente_Cep1_idx')
                ->references('IDCep')->on('cep');

            $table->foreign('IDMembro', 'fk_Paciente_Paciente')
                ->references('IDPaciente')->on('paciente')
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
