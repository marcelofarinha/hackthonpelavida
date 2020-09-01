<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteexameTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pacienteexame';

    /**
     * Run the migrations.
     * @table pacienteexame
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('IDExame');
            $table->unsignedBigInteger('IDPaciente');
            $table->string('Resultado', 1);
            $table->dateTime('DataColeta')->nullable()->default(null);
            $table->dateTime('DataResultado')->nullable()->default(null);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at') ->nullable();
            $table->timestamp('deleted_at') ->nullable();

            $table->index(["IDPaciente"], 'fk_Paciente_Exame_Paciente1_idx');

            $table->index(["IDExame"], 'fk_Paciente_Exame_Exame1_idx');


            $table->foreign('IDExame', 'pacienteexame_IDExame')
                ->references('IDExame')->on('exame')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('IDPaciente', 'fk_Paciente_Exame_Paciente1_idx')
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
