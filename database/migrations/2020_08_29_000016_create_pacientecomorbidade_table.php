<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientecomorbidadeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pacientecomorbidade';

    /**
     * Run the migrations.
     * @table pacientecomorbidade
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('IDPaciente');
            $table->unsignedBigInteger('IDComorbidade');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at') ->nullable();
            $table->timestamp('deleted_at') ->nullable();

            $table->index(["IDComorbidade"], 'fk_Paciente_Comorbidade_Comorbidade1_idx');

            $table->index(["IDPaciente"], 'fk_Paciente_Comorbidade_Paciente1_idx');


            $table->foreign('IDComorbidade', 'fk_Paciente_Comorbidade_Comorbidade1_idx')
                ->references('IDComorbidade')->on('comorbidade')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('IDPaciente', 'pacientecomorbidade_IDPaciente')
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
