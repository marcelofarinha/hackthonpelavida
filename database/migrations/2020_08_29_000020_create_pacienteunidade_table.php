<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteunidadeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pacienteunidade';

    /**
     * Run the migrations.
     * @table pacienteunidade
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('IDUnidade');
            $table->unsignedBigInteger('IDPaciente');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at') ->nullable();
            $table->timestamp('deleted_at') ->nullable();

            $table->index(["IDPaciente"], 'fk_PacienteUnidade_Paciente1_idx');


            $table->foreign('IDPaciente', 'fk_PacienteUnidade_Paciente1_idx')
                ->references('IDPaciente')->on('paciente');



            $table->foreign('IDUnidade', 'pacienteunidade_IDUnidade')
                ->references('IDUnidade')->on('unidade');


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
