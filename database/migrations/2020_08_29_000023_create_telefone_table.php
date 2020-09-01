<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefoneTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'telefone';

    /**
     * Run the migrations.
     * @table telefone
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('IDTelefone');
            $table->unsignedBigInteger('IDPaciente');
            $table->integer('DDD')->nullable()->default(null);
            $table->integer('Numero')->nullable()->default(null);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at') ->nullable();
            $table->timestamp('deleted_at') ->nullable();

            $table->index(["IDPaciente"], 'fk_Telefone_Paciente1_idx');


            $table->foreign('IDPaciente', 'fk_Telefone_Paciente1_idx')
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
