<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteconvenioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pacienteconvenio';

    /**
     * Run the migrations.
     * @table pacienteconvenio
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('IDPaciente');
            $table->unsignedBigInteger('IDConvenio');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at') ->nullable();
            $table->timestamp('deleted_at') ->nullable();

            $table->index(["IDConvenio"], 'fk_Paciente_Convenio_Convenio1_idx');

            $table->index(["IDPaciente"], 'fk_Paciente_Convenio_Paciente1_idx');


            $table->foreign('IDConvenio', 'fk_Paciente_Convenio_Convenio1_idx')
                ->references('IDConvenio')->on('convenio')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('IDPaciente', 'pacienteconvenio_IDPaciente')
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
